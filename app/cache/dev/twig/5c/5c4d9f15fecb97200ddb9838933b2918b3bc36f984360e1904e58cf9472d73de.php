<?php

/* base.html.twig */
class __TwigTemplate_5cc5172bdde16530bda5c94a67645c7d4d1665ef843491f32524047a94727a45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54d00dacd93852bcbcb6672faa1e13829bcb86e67159b8b644bed467da877906 = $this->env->getExtension("native_profiler");
        $__internal_54d00dacd93852bcbcb6672faa1e13829bcb86e67159b8b644bed467da877906->enter($__internal_54d00dacd93852bcbcb6672faa1e13829bcb86e67159b8b644bed467da877906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css\" rel=\"stylesheet\">
        <link href=\"//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css\" rel=\"stylesheet\">
\t\t<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            body {
\t            margin:0;
\t            padding:0;
\t            background:#fff;
\t            font-family:'Raleway', sans-serif;
\t            font-size:12px;
            }
            ul {
\t            margin:0;
\t            padding:0;
\t            text-decoration:none;
\t            list-style:none;
            }
            li {
\t            padding:0;
\t            margin:0;
            }
            nav {
\t            text-align:center;
\t            width:100%;
\t            position:relative;
\t            height:auto;
\t            overflow:hidden;
\t            background:none;
            }
            nav ul {
\t            text-align:center;
            }
            nav ul li {
\t            display:inline-block;
            }
            nav ul li a {
\t            color:#333;
\t            display:inline-block;
\t            padding:1em 3em;
\t            text-decoration:none;
\t            border-bottom:2px solid #fff;
\t            transition-property:all .2s linear 0s;
\t            -moz-transition:all .2s linear 0s;
\t            -webkit-transition:all .2s linear 0s;
\t            -o-transition:all .2s linear 0s;
\t            font-size:18px;
            }
            nav ul li a:hover {
\t            color: #34B484;
            }
            /*styling open close button*/
            .button {
\t            display:inline;
\t            position:absolute;
\t            right:50px;
\t            top:6px;
\t            z-index:999;
\t            font-size:30px;
            }
            .button a {
\t            text-decoration:none;
            }
            .btn-open:after {
\t            color:#333;
\t            content:\"\\f0c9\";
\t            font-family:\"FontAwesome\";
\t            transition-property:all .2s linear 0s;
\t            -moz-transition:all .2s linear 0s;
\t            -webkit-transition:all .2s linear 0s;
\t            -o-transition:all .2s linear 0s;
            }
            .btn-open:hover:after {
\t            color:#34B484;
            }
            .btn-close:after {
\t            color:#fff;
\t            content:\"\\f00d\";
\t            font-family:\"FontAwesome\";
\t            transition-property:all .2s linear 0s;
\t            -moz-transition:all .2s linear 0s;
\t            -webkit-transition:all .2s linear 0s;
\t            -o-transition:all .2s linear 0s;
            }
            .btn-close:hover:after {
\t            color: #34B484;
            }
            /*overlay*/
            .overlay {
\t            display:none;
\t            position:fixed;
\t            top:0;
\t            height:100%;
\t            width:100%;
\t            background:#333;
\t            overflow:auto;
\t            z-index:99;
            }
            .wrap {
\t            color:#e9e9e9;
\t            text-align:center;
\t            max-width:90%;
\t            margin:0 auto;
            }
            .wrap ul.wrap-nav {
\t            border-bottom:1px solid #575757;
\t            text-transform:capitalize;
\t            padding:150px 0px 100px;
            }
            .wrap ul.wrap-nav li {
\t            font-size:26px;
\t            display:inline-block;
\t            vertical-align:top;
\t            width:24%;
\t            position:relative;
            }
            .wrap ul.wrap-nav li a {
\t            color:#34B484;
\t            display:block;
\t            padding:8px 0;
\t            text-decoration:none;
\t            transition-property:all .2s linear 0s;
\t            -moz-transition:all .2s linear 0s;
\t            -webkit-transition:all .2s linear 0s;
\t            -o-transition:all .2s linear 0s;
            }
            .wrap ul.wrap-nav li a:hover {
\t            color:#f0f0f0;
            }
            .wrap ul.wrap-nav ul {
\t            padding:20px 0;
            }
            .wrap ul.wrap-nav ul li {
\t            display:block;
\t            font-size:18px;
\t            width:100%;
\t            color:#e9e9e9;
            }
            .wrap ul.wrap-nav ul li a {
\t            color:#f0f0f0;
            }
            .wrap ul.wrap-nav ul li a:hover {
\t            color:#34B484;
            }
            .social {
\t            font-size:25px;
\t            padding:20px;
            }
            .social p {
\t            margin:0;
\t            padding:20px 0 5px 0;
\t            line-height:30px;
\t            font-size:13px;
            }
            .social p a {
\t            color:#34B484;
\t            text-decoration:none;
\t            margin:0;
\t            padding:0;
            }
            .social-icon {
\t            width:80px;
\t            height:50px;
\t            background:#e9e9e9;
\t            color:#333;
\t            display:inline-block;
\t            margin:0 20px;
\t            transition-property:all .2s linear 0s;
\t            -moz-transition:all .2s linear 0s;
\t            -webkit-transition:all .2s linear 0s;
\t            -o-transition:all .2s linear 0s;
            }
            .social-icon:hover {
\t            background:#34B484;
\t            color:#f0f0f0;
            }
            .social-icon i {
\t            margin-top:12px;
            }
            @media screen and (max-width:48em) {
\t            .wrap ul.wrap-nav>li {
\t\t            width:100%;
\t\t            padding:20px 0;
\t\t            border-bottom:1px solid #575757;
\t            }
\t            .wrap ul.wrap-nav {
\t\t            padding:30px 0px 0px;
\t            }
\t            nav ul {
\t\t            opacity:0;
\t\t            visibility:hidden;
\t            }
\t            .social {
\t\t            color:#c1c1c1;
\t\t            font-size:25px;
\t\t            padding:15px 0;
\t            }
\t            .social-icon {
\t\t            width:100%;
\t\t            height:50px;
\t\t            background:#fff;
\t\t            color:#333;
\t\t            display:block;
\t\t            margin:5px 0;
\t            }
            }
            .content {
\t            width:100%;
\t            margin-top:200px;
\t            font-size:20px;
\t            color#333;
\t            text-align: center;
            }
        </style>
        ";
        // line 221
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 223
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav>
            <ul>
\t            <li><a href=\"#\">Temperature</a></li>
\t            <li><a href=\"#\">Home</a></li>
\t            <li><a href=\"#\">Water</a></li>
            </ul>
            <div class=\"button\">
\t            <a class=\"btn-open\" href=\"#\"></a>
            </div>
        </nav>
        <div class=\"overlay\">
\t        <div class=\"wrap\">
\t\t        <ul class=\"wrap-nav\">
\t\t\t        <li><a href=\"#\">Temperature</a>
\t\t\t        <ul>
\t\t\t\t        <li><a href=\"#\">Text info</a></li>
\t\t\t\t        <li><a href=\"#\">Graphics</a></li>
\t\t\t        </ul>
\t\t\t        </li>
\t\t\t        <li><a href=\"#\">Home</a>
\t\t\t        <ul>
\t\t\t\t    </ul>
\t\t\t        </li>
\t\t\t        <li><a href=\"#\">Water</a>
\t\t\t        <ul>
\t\t\t\t        <li><a href=\"#\">Text info</a></li>
\t\t\t\t        <li><a href=\"#\">Graphics</a></li>
\t\t\t        </ul>
\t\t\t        </li>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                </ul>
                <p>
                    Designed by Yurii Zinets and Anton Gladyr
                </p>
\t        </div>
        </div>
        <div class=\"content\">
\t    ";
        // line 263
        $this->displayBlock('body', $context, $blocks);
        // line 264
        echo "        </div>
        <script>
            \$(document).ready(function(){
                \$(\".button a\").click(function(){
                    \$(\".overlay\").fadeToggle(200);
                    \$(this).toggleClass('btn-open').toggleClass('btn-close');
                });
            });
            \$('.overlay').on('click', function(){
                \$(\".overlay\").fadeToggle(200);   
                \$(\".button a\").toggleClass('btn-open').toggleClass('btn-close');
                open = false;
            });
        </script>
    </body>
</html>
";
        
        $__internal_54d00dacd93852bcbcb6672faa1e13829bcb86e67159b8b644bed467da877906->leave($__internal_54d00dacd93852bcbcb6672faa1e13829bcb86e67159b8b644bed467da877906_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5f35bfadf1f8af294089a9331c246d6a798b926d56681a8ba756af325d77dcd = $this->env->getExtension("native_profiler");
        $__internal_f5f35bfadf1f8af294089a9331c246d6a798b926d56681a8ba756af325d77dcd->enter($__internal_f5f35bfadf1f8af294089a9331c246d6a798b926d56681a8ba756af325d77dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home Control";
        
        $__internal_f5f35bfadf1f8af294089a9331c246d6a798b926d56681a8ba756af325d77dcd->leave($__internal_f5f35bfadf1f8af294089a9331c246d6a798b926d56681a8ba756af325d77dcd_prof);

    }

    // line 221
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30aaa6224124da9aadd07eb1d7550be4d0ae5a1fc964693db02f63351257b19b = $this->env->getExtension("native_profiler");
        $__internal_30aaa6224124da9aadd07eb1d7550be4d0ae5a1fc964693db02f63351257b19b->enter($__internal_30aaa6224124da9aadd07eb1d7550be4d0ae5a1fc964693db02f63351257b19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 222
        echo "        ";
        
        $__internal_30aaa6224124da9aadd07eb1d7550be4d0ae5a1fc964693db02f63351257b19b->leave($__internal_30aaa6224124da9aadd07eb1d7550be4d0ae5a1fc964693db02f63351257b19b_prof);

    }

    // line 263
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac722467177fefe892d41ffd092573ca074db73af4ba86761bfccb8eaf8dd5a3 = $this->env->getExtension("native_profiler");
        $__internal_ac722467177fefe892d41ffd092573ca074db73af4ba86761bfccb8eaf8dd5a3->enter($__internal_ac722467177fefe892d41ffd092573ca074db73af4ba86761bfccb8eaf8dd5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac722467177fefe892d41ffd092573ca074db73af4ba86761bfccb8eaf8dd5a3->leave($__internal_ac722467177fefe892d41ffd092573ca074db73af4ba86761bfccb8eaf8dd5a3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 263,  339 => 222,  333 => 221,  321 => 10,  298 => 264,  296 => 263,  252 => 223,  250 => 221,  36 => 10,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>*/
/*         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">*/
/*         <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">*/
/* 		<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>*/
/*         <title>{% block title %}Home Control{% endblock %}</title>*/
/*         <style>*/
/*             body {*/
/* 	            margin:0;*/
/* 	            padding:0;*/
/* 	            background:#fff;*/
/* 	            font-family:'Raleway', sans-serif;*/
/* 	            font-size:12px;*/
/*             }*/
/*             ul {*/
/* 	            margin:0;*/
/* 	            padding:0;*/
/* 	            text-decoration:none;*/
/* 	            list-style:none;*/
/*             }*/
/*             li {*/
/* 	            padding:0;*/
/* 	            margin:0;*/
/*             }*/
/*             nav {*/
/* 	            text-align:center;*/
/* 	            width:100%;*/
/* 	            position:relative;*/
/* 	            height:auto;*/
/* 	            overflow:hidden;*/
/* 	            background:none;*/
/*             }*/
/*             nav ul {*/
/* 	            text-align:center;*/
/*             }*/
/*             nav ul li {*/
/* 	            display:inline-block;*/
/*             }*/
/*             nav ul li a {*/
/* 	            color:#333;*/
/* 	            display:inline-block;*/
/* 	            padding:1em 3em;*/
/* 	            text-decoration:none;*/
/* 	            border-bottom:2px solid #fff;*/
/* 	            transition-property:all .2s linear 0s;*/
/* 	            -moz-transition:all .2s linear 0s;*/
/* 	            -webkit-transition:all .2s linear 0s;*/
/* 	            -o-transition:all .2s linear 0s;*/
/* 	            font-size:18px;*/
/*             }*/
/*             nav ul li a:hover {*/
/* 	            color: #34B484;*/
/*             }*/
/*             /*styling open close button*//* */
/*             .button {*/
/* 	            display:inline;*/
/* 	            position:absolute;*/
/* 	            right:50px;*/
/* 	            top:6px;*/
/* 	            z-index:999;*/
/* 	            font-size:30px;*/
/*             }*/
/*             .button a {*/
/* 	            text-decoration:none;*/
/*             }*/
/*             .btn-open:after {*/
/* 	            color:#333;*/
/* 	            content:"\f0c9";*/
/* 	            font-family:"FontAwesome";*/
/* 	            transition-property:all .2s linear 0s;*/
/* 	            -moz-transition:all .2s linear 0s;*/
/* 	            -webkit-transition:all .2s linear 0s;*/
/* 	            -o-transition:all .2s linear 0s;*/
/*             }*/
/*             .btn-open:hover:after {*/
/* 	            color:#34B484;*/
/*             }*/
/*             .btn-close:after {*/
/* 	            color:#fff;*/
/* 	            content:"\f00d";*/
/* 	            font-family:"FontAwesome";*/
/* 	            transition-property:all .2s linear 0s;*/
/* 	            -moz-transition:all .2s linear 0s;*/
/* 	            -webkit-transition:all .2s linear 0s;*/
/* 	            -o-transition:all .2s linear 0s;*/
/*             }*/
/*             .btn-close:hover:after {*/
/* 	            color: #34B484;*/
/*             }*/
/*             /*overlay*//* */
/*             .overlay {*/
/* 	            display:none;*/
/* 	            position:fixed;*/
/* 	            top:0;*/
/* 	            height:100%;*/
/* 	            width:100%;*/
/* 	            background:#333;*/
/* 	            overflow:auto;*/
/* 	            z-index:99;*/
/*             }*/
/*             .wrap {*/
/* 	            color:#e9e9e9;*/
/* 	            text-align:center;*/
/* 	            max-width:90%;*/
/* 	            margin:0 auto;*/
/*             }*/
/*             .wrap ul.wrap-nav {*/
/* 	            border-bottom:1px solid #575757;*/
/* 	            text-transform:capitalize;*/
/* 	            padding:150px 0px 100px;*/
/*             }*/
/*             .wrap ul.wrap-nav li {*/
/* 	            font-size:26px;*/
/* 	            display:inline-block;*/
/* 	            vertical-align:top;*/
/* 	            width:24%;*/
/* 	            position:relative;*/
/*             }*/
/*             .wrap ul.wrap-nav li a {*/
/* 	            color:#34B484;*/
/* 	            display:block;*/
/* 	            padding:8px 0;*/
/* 	            text-decoration:none;*/
/* 	            transition-property:all .2s linear 0s;*/
/* 	            -moz-transition:all .2s linear 0s;*/
/* 	            -webkit-transition:all .2s linear 0s;*/
/* 	            -o-transition:all .2s linear 0s;*/
/*             }*/
/*             .wrap ul.wrap-nav li a:hover {*/
/* 	            color:#f0f0f0;*/
/*             }*/
/*             .wrap ul.wrap-nav ul {*/
/* 	            padding:20px 0;*/
/*             }*/
/*             .wrap ul.wrap-nav ul li {*/
/* 	            display:block;*/
/* 	            font-size:18px;*/
/* 	            width:100%;*/
/* 	            color:#e9e9e9;*/
/*             }*/
/*             .wrap ul.wrap-nav ul li a {*/
/* 	            color:#f0f0f0;*/
/*             }*/
/*             .wrap ul.wrap-nav ul li a:hover {*/
/* 	            color:#34B484;*/
/*             }*/
/*             .social {*/
/* 	            font-size:25px;*/
/* 	            padding:20px;*/
/*             }*/
/*             .social p {*/
/* 	            margin:0;*/
/* 	            padding:20px 0 5px 0;*/
/* 	            line-height:30px;*/
/* 	            font-size:13px;*/
/*             }*/
/*             .social p a {*/
/* 	            color:#34B484;*/
/* 	            text-decoration:none;*/
/* 	            margin:0;*/
/* 	            padding:0;*/
/*             }*/
/*             .social-icon {*/
/* 	            width:80px;*/
/* 	            height:50px;*/
/* 	            background:#e9e9e9;*/
/* 	            color:#333;*/
/* 	            display:inline-block;*/
/* 	            margin:0 20px;*/
/* 	            transition-property:all .2s linear 0s;*/
/* 	            -moz-transition:all .2s linear 0s;*/
/* 	            -webkit-transition:all .2s linear 0s;*/
/* 	            -o-transition:all .2s linear 0s;*/
/*             }*/
/*             .social-icon:hover {*/
/* 	            background:#34B484;*/
/* 	            color:#f0f0f0;*/
/*             }*/
/*             .social-icon i {*/
/* 	            margin-top:12px;*/
/*             }*/
/*             @media screen and (max-width:48em) {*/
/* 	            .wrap ul.wrap-nav>li {*/
/* 		            width:100%;*/
/* 		            padding:20px 0;*/
/* 		            border-bottom:1px solid #575757;*/
/* 	            }*/
/* 	            .wrap ul.wrap-nav {*/
/* 		            padding:30px 0px 0px;*/
/* 	            }*/
/* 	            nav ul {*/
/* 		            opacity:0;*/
/* 		            visibility:hidden;*/
/* 	            }*/
/* 	            .social {*/
/* 		            color:#c1c1c1;*/
/* 		            font-size:25px;*/
/* 		            padding:15px 0;*/
/* 	            }*/
/* 	            .social-icon {*/
/* 		            width:100%;*/
/* 		            height:50px;*/
/* 		            background:#fff;*/
/* 		            color:#333;*/
/* 		            display:block;*/
/* 		            margin:5px 0;*/
/* 	            }*/
/*             }*/
/*             .content {*/
/* 	            width:100%;*/
/* 	            margin-top:200px;*/
/* 	            font-size:20px;*/
/* 	            color#333;*/
/* 	            text-align: center;*/
/*             }*/
/*         </style>*/
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <nav>*/
/*             <ul>*/
/* 	            <li><a href="#">Temperature</a></li>*/
/* 	            <li><a href="#">Home</a></li>*/
/* 	            <li><a href="#">Water</a></li>*/
/*             </ul>*/
/*             <div class="button">*/
/* 	            <a class="btn-open" href="#"></a>*/
/*             </div>*/
/*         </nav>*/
/*         <div class="overlay">*/
/* 	        <div class="wrap">*/
/* 		        <ul class="wrap-nav">*/
/* 			        <li><a href="#">Temperature</a>*/
/* 			        <ul>*/
/* 				        <li><a href="#">Text info</a></li>*/
/* 				        <li><a href="#">Graphics</a></li>*/
/* 			        </ul>*/
/* 			        </li>*/
/* 			        <li><a href="#">Home</a>*/
/* 			        <ul>*/
/* 				    </ul>*/
/* 			        </li>*/
/* 			        <li><a href="#">Water</a>*/
/* 			        <ul>*/
/* 				        <li><a href="#">Text info</a></li>*/
/* 				        <li><a href="#">Graphics</a></li>*/
/* 			        </ul>*/
/* 			        </li>*/
/*                     <br><br><br><br><br><br><br><br><br><br><br><br>*/
/*                 </ul>*/
/*                 <p>*/
/*                     Designed by Yurii Zinets and Anton Gladyr*/
/*                 </p>*/
/* 	        </div>*/
/*         </div>*/
/*         <div class="content">*/
/* 	    {% block body %}{% endblock %}*/
/*         </div>*/
/*         <script>*/
/*             $(document).ready(function(){*/
/*                 $(".button a").click(function(){*/
/*                     $(".overlay").fadeToggle(200);*/
/*                     $(this).toggleClass('btn-open').toggleClass('btn-close');*/
/*                 });*/
/*             });*/
/*             $('.overlay').on('click', function(){*/
/*                 $(".overlay").fadeToggle(200);   */
/*                 $(".button a").toggleClass('btn-open').toggleClass('btn-close');*/
/*                 open = false;*/
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
