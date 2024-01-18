<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class CommanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      
  
           $rules = [];

            if(Request::has('name')){
                //$rules['name'] = 'required';
               $rules['name'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }
            if(Request::has('firstname')){
                //$rules['name'] = 'required';
               $rules['firstname'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }
            if(Request::has('lastname')){
                //$rules['name'] = 'required';
               $rules['lastname'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }

             if(Request::has('fullname')){
                //$rules['name'] = 'required';
               $rules['fullname'] =['required','regex:/[A-Za-z\s]{3,30}/'];

            }

             if(Request::has('mobile')){ 
                $rules['mobile'] =['required','regex:/[0-9\s._*#()+-]+/' ];
                //$rules['phone'] = 'required';
            }

            if(Request::has('company')){
                //$rules['company'] = ['required','alpha_num'];

                $rules['company'] =['required','regex:/[A-Za-z0-9\s]{3,30}/' ];
                // $rules['company'] =['required','regex:/^[a-z .,\-]+$/i' ];
                  // $rules['company'] = ['required','regex:/^[ A-Za-z0-9_@.\/#&+-]*$/'];
            }
            if(Request::has('category')){              
                $rules['category'] = 'required';
            }
              if(Request::has('country')){              
                $rules['country'] = 'required';
            }
            
            if(Request::has('email')){ 
                $rules['email'] = 'required|email';
            }
            if(Request::has('phone')){ 
                $rules['phone'] =['required','regex:/[0-9\s._*#()+-]+/' ];
                //$rules['phone'] = 'required';
            }
            if(Request::has('telephone')){ 
                $rules['telephone'] =['required','regex:/[0-9\s._*#()+-]+/' ];
                //$rules['phone'] = 'required';
            }
            if(Request::has('message')){ 
                $rules['message'] = 'required';
            }  
             if(Request::has('description')){ 
                $rules['description'] = 'required';
            }
            if(Request::has('title')){ 
                $rules['title'] = 'required';
            }    
            if(Request::has('location')){ 
                $rules['location'] = 'required';
            }    
            if(Request::has('date')){ 
                $rules['date'] = 'required';
            }

            if(Request::has('g-recaptcha-response')){
              // $rules['g-recaptcha-response'] = 'required';
            }

            if(Request::has('event_name')){

             $rules['event_name'] = 'required';
            
            }

            if(Request::has('event_venue')){

             $rules['event_venue'] = 'required';
            
            }

            if(Request::has('event_address')){

             $rules['event_address'] = 'required';
            
            }

             if(Request::has('address')){

             $rules['address'] = 'required';
            
            }

            if(Request::has('organiser')){

             $rules['organiser'] = 'required';
            
            }

            if(Request::has('event_organiser')){
                $rules['event_organiser'] = 'required';            
            }

            if(Request::has('start_date')){

             $rules['start_date'] = 'required';
            
            }

            if(Request::has('end_date')){

             $rules['end_date'] = 'required';
            
            }

            if(Request::has('cf_leads_jobtitle'))
            {
                $rules['cf_leads_jobtitle'] = 'required';   
            }

            if(Request::has('web_link'))
            {
                $rules['web_link'] = 'required';   
            }

             if(Request::has('venue'))
            {
                $rules['venue'] = 'required';   
            }
            



            

            

            
             return $rules;

             /*$notification = array(
            'message' =>"All", 
            'alert-type' => 'error'
        );
       return redirect()->back()->with($notification);*/
            }
    

   
public function messages()
{
    return [
       
        'message.required'  => 'A message is required',
        'cf_leads_jobtitle.required'  => 'job title is required',
    ];
}
}
