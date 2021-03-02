<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPages extends Controller
{
    //rendering the homepage thsi will process all the pages upon request
    public function homepage(){
        return view('newtemplates.pages.homepage');
    }

//rendering the contactUs thsi will process all the pages upon request
    public function contactUs(){
        return view('newtemplates.pages.contactUs');
    }

//rendering the faq thsi will process all the pages upon request
    public function faq(){
        return view('newtemplates.pages.faq');
    }

//rendering the services thsi will process all the pages upon request
    public function services(){
        return view('newtemplates.pages.services');
    }

//rendering the success-story thsi will process all the pages upon request
    public function successStory(){
        return view('newtemplates.pages.successStory');
    }

//rendering the success-story thsi will process all the pages upon request
    public function aboutUs(){
        return view('newtemplates.pages.aboutUs');
    }

//rendering the success-story thsi will process all the pages upon request
public function projectCategories(){
    return view('newtemplates.pages.projectCategories');
}

//rendering the success-story thsi will process all the pages upon request
public function counter(){
    return view('newtemplates.pages.counter');
}

//rendering the success-story thsi will process all the pages upon request
public function topProjects(){
    return view('newtemplates.pages.topProjects');
}

//rendering the loginregforget pages thsi will process all the pages upon request
public function logindex(){
    return view('logInRegForgot.pages.logindex');
}

public function login(){
    return view('logInRegForgot.pages.login');
}

public function forgot(){
    return view('logInRegForgot.pages.forgot');
}

public function register(){
    return view('logInRegForgot.pages.register');
}
}

