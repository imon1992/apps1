<?php

class Task1Controller extends BaseController
{
    public function redirectToHome()
    {
        return Redirect::to('home');
    }

    public function showHome()
    {
        return View::make('task1.home');
    }

    public function showAbout()
    {
        return View::make('task1.about');
    }

    public function showArticles()
    {
        $articles = ['articles'=>['article1'=>['articleText' =>'First article text','articleHref'=>'articles/1'],
            'article2'=>['articleText' =>'2 article text','articleHref'=>'articles/2'],
            'article3'=>['articleText' =>'3 article text','articleHref'=>'articles/3'],
            'article4'=>['articleText' =>'4 article text','articleHref'=>'articles/4'],
            'article5'=>['articleText' =>'5 article text','articleHref'=>'articles/5'],
            'article6'=>['articleText' =>'6 article text','articleHref'=>'articles/6'],
            'article7'=>['articleText' =>'7 article text','articleHref'=>'articles/7'],
            'article8'=>['articleText' =>'8 article text','articleHref'=>'articles/8'],
            'article9'=>['articleText' =>'9 article text','articleHref'=>'articles/9'],
            'article10'=>['articleText' =>'10 article text','articleHref'=>'articles/10']]];

        return View::make('task1.articles',$articles);
    }

    public function showArticleNumber($number)
    {
        return View::make('task1.article',['number'=>$number]);
    }

    public function showContact()
    {
        return View::make('task1.form');
    }

    public function getMessage()
    {
        $rules = array('name' => 'required','message'=>'required');

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            $failMessage = $validator->messages();
            return Redirect::to('contact-us')->withErrors($failMessage);
        }else
        {
            return View::make('task1.thankYou',['name'=>Input::get('name')]);
        }
    }
}
