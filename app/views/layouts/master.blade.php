<!DOCTYPE html>

<!--[if lt IE 9]><html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"><![endif]-->
<!--[if gt IE 8]><html xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"><![endif]-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="sv"> <!--<![endif]-->

    <head>
        @include('common._meta')
        @include('common._css')		


     
    </head>
    <body ng-app="starter">
        @include('common._header')		

        <section class="main-container content has-header padding">				
            {{getMessage()}}		
            {{ $content }}		

            
        </section>	

        @include('common._footer')		
        @include('common._js')

    </body>	
</html>
