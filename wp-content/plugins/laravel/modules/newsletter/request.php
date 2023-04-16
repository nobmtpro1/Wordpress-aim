<?php
use App\Models\Newsletter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

add_action('wp_ajax_edit_newsletter', 'edit_newsletter');
add_action('wp_ajax_nopriv_edit_newsletter', 'edit_newsletter');
function edit_newsletter()
{
    $validator = Validator::make($_POST, [
        "name" => "required|max:100",
        "email" => "required|max:100",
    ]);

    if ($validator->fails()) {
        return wp_send_json_error($validator->errors()->all()[0]);
    }

    if (@$_POST['id']) {
        $newsletter = Newsletter::find(@$_POST['id']);
    } else {
        $newsletter = new Newsletter;
    }

    $newsletter->name = $_POST['name'];
    $newsletter->email = $_POST['email'];
    $newsletter->is_marketing = @$_POST['is_marketing'] ? 1 : 0;
    $newsletter->save();
    return wp_send_json_success('Success');
}

add_action('wp_ajax_sync_newsletter', 'sync_newsletter');
function sync_newsletter()
{
    $newsletter = Newsletter::find(@$_REQUEST['id']);
    if ($newsletter) {
        $response = Http::post('https://610e5b4548beae001747bad5.mockapi.io/products', [
            'name' => $newsletter->name,
        ]);
    }
    return wp_send_json_success('Success');
}