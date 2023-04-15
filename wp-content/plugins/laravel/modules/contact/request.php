<?php
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

add_action("wp_ajax_submit_contact", "submit_contact");
add_action("wp_ajax_nopriv_submit_contact", "submit_contact");

function submit_contact()
{
    if (!wp_verify_nonce(@$_REQUEST['_wpnonce'])) {
        return wp_send_json_error("Bad request");
    }

    $validator = Validator::make($_POST, [
        'email' => 'required|max:255',
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return wp_send_json_error($validator->errors()->all()[0]);
    }

    $contact = new Contact;
    $contact->name = @$_POST['name'];
    $contact->email = @$_POST['email'];
    $contact->save();
    return wp_send_json_error('Success');
}