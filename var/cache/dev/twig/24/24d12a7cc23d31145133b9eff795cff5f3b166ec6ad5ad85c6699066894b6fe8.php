<?php

/* ::base.html.twig */
class __TwigTemplate_85c3ee8780e9e6a897530a7469d6e806fa905f5f8357d1ff6bd7a4d58fcf2ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c731e1cf879a250eb35375943baf93f1bc3c2233b3b2376e967735ed2afcc42 = $this->env->getExtension("native_profiler");
        $__internal_0c731e1cf879a250eb35375943baf93f1bc3c2233b3b2376e967735ed2afcc42->enter($__internal_0c731e1cf879a250eb35375943baf93f1bc3c2233b3b2376e967735ed2afcc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>MyLanding</title>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</head>

<body>
<div class=\"btn_up\"> &uarr; </div>
<header id=\"header\">    
        <div class=\"motion\">            
            <div class=\"pre-wrapper\">
                <div class=\"logo\">
                </div>
                <div class=\"menu\">
                    <ul>
                        <li><a href=#>Home</a></li>
                        <li><a href=#>About</a></li>
                        <li><a href=#>Team</a></li>
                        <li><a href=#>Portfolio</a></li>
                        <li><a href=#>Other</a></li>
                        <li><a href=#>Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"slider\">        
            <div class=\"pre-wrapper\">           
                <div class=\"wel-to-mot\">
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("blog_blog_homepage");
        echo "\" >Welcom to Motion</a>
                </div>
                <div class=\"asmart\">
                    Asmart & Creative Single Page Template
                </div>
                <form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("blog_blog_search");
        echo "\" method=\"POST\" class=\"form-search\">
                    <input type=\"text\" name=\"search\" class=\"input-medium search-query\">
                    <input type=\"submit\" class=\"bin\" value=\"Искать\">
                </form>
                <!--<form action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("blog_blog_word", array("word" => "word"));
        echo "\" method=\"GET\" class=\"form-search\">
                    <input type=\"text\" name=\"param\" class=\"input-medium search-query\">
                    <input type=\"submit\" class=\"bin\" value=\"Искать\">
                </form>-->
                ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "            </div>
            
            <div class=\"sldr safari_browser_screen\">
                    <div class=\"div_phone\"> 
                        <div class=\"general_background\">
                            <div class=\"shape_bar\">
                                <div class=\"dots\">
                                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blogblog/img/yellow.png"), "html", null, true);
        echo "\" class=\"yellow\">
                                    <img src=\"./img/red.png\" class=\"red\">   
                                    <img src=\"./img/green.png\" class=\"green\">
                                </div>
                                <div class=\"arrows-shbar\">
                                    <img src=\"./img/arrows_shbar.png\">
                                </div>
                            </div>
                            <div class=\"put_your_desing_here\">
                                <!--<img src=\"./img/put_your_desing_here.png\">-->
                            </div>                      
                        </div>
                        <div class=\"iphone_screen\"> 
                        </div>
                        <div class=\"sldr sm back\">
                            <div class=\"general_background\">
                                <div class=\"shape_bar\">
                                    <div class=\"dots\">
                                        <img src=\"./img/yellow.png\" class=\"yellow\">
                                        <img src=\"./img/red.png\" class=\"red\">   
                                        <img src=\"./img/green.png\" class=\"green\">
                                    </div>
                                    <div class=\"arrows-shbar\">
                                        <img src=\"./img/arrows_shbar.png\">
                                    </div>
                                </div>
                                <div class=\"put_your_desing_here\">
                                    <!--<img src=\"./img/back.png\">-->
                                </div>                      
                            </div>
                        </div>
                        <div class=\"sldr sm next\">
                                <div class=\"general_background\">
                                    <div class=\"shape_bar\">
                                        <div class=\"dots\">
                                            <img src=\"./img/yellow.png\" class=\"yellow\">
                                            <img src=\"./img/red.png\" class=\"red\">   
                                            <img src=\"./img/green.png\" class=\"green\">
                                        </div>
                                        <div class=\"arrows-shbar\">
                                            <img src=\"./img/arrows_shbar.png\">
                                        </div>
                                    </div>
                                    <div class=\"put_your_desing_here\">
                                        <!--<img src=\"./img/back2.png\">-->
                                    </div>                      
                                </div>
                        </div>
                        <!--<div class=\"sldr safari_browser_screen my2\">
                            <div class=\"general_background\">
                                <div class=\"shape_bar\">
                                    <div class=\"dots\">
                                    
                                    </div>
                                    <div class=\"arrows-shbar\">
                                        <img src=\"./img/arrows_shbar.png\">
                                    </div>
                                </div>
                                <div class=\"put_your_desing_here\">
                                    
                                </div>
                                
                            </div>
                        </div>-->
                    </div>
            </div>
                
                    <a class=\"arrow_prev\">
                        <img src=\"./img/arrow-prev.png\">
                    </a>
                
                
                    <a class=\"arrow_next\">
                        <img src=\"./img/arrow-next.png\">
                    </a>
                
            
        </div>
</header>

<div id=\"merits\">
    <div class=\"pre-wrapper\">
        <div class=\"title\">
            <div class=\"text1\">Smart & Creative</div>
            <div class=\"text2\">This is why you will use it :)</div>
        </div>
        <div class=\"content\">
            <div class=\"met-wrapper\">
                <div class=\"circle multi\">  
                </div>
                <div class=\"text1\">
                    Multi purpose
                </div>
                <div class=\"text2\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing...
                </div>
            </div>
        </div>
        <div class=\"content\">
            <div class=\"met-wrapper\">
                <div class=\"circle flat\">   
                </div>
                <div class=\"text1\">
                    Flat UI
                </div>
                <div class=\"text2\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing...
                </div>
            </div>
        </div>
        <div class=\"content\">
            <div class=\"met-wrapper\">
                <div class=\"circle creative\">   
                </div>
                <div class=\"text1\">
                    Creative Design
                </div>
                <div class=\"text2\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing...
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"team\">
    <div class=\"pre-wrapper\">
        <div class=\"title\">
            <div class=\"text1\">Talented & Experts</div>
            <div class=\"text2\">This is our team :)</div>
        </div>
        <div class=\"all-cont\">
            <div class=\"content\">
                <div class=\"elipse mahmoud\">
                </div>
                <div class=\"text1\">
                    Mahmoude Baghagho
                </div>
                <div class=\"text2\">
                    Senior UI Designer
                </div>
                <div class=\"follow\">
                    <div class=\"twitt\">
                    </div>
                    <h3>Follow</h3>
                </div>
            </div>
            <div class=\"content\">
                <div class=\"elipse abd\">
                </div>
                <div class=\"text1\">
                    Abd ElRahman
                </div>
                <div class=\"text2\">
                    Senior App Developer
                </div>
                <div class=\"follow\">
                    <div class=\"twitt\">
                    </div>
                    <h3>Follow</h3>
                </div>
            </div>
            <div class=\"content\">
                <div class=\"elipse mostafa\">
                </div>
                <div class=\"text1\">
                    Mostafa Amin
                </div>
                <div class=\"text2\">
                    Senior Graphic Designer
                </div>
                <div class=\"follow\">
                    <div class=\"twitt\">
                    </div>
                    <h3>Follow</h3>
                </div>
            </div>
            <div class=\"content\">
                <div class=\"elipse ahmed\">
                </div>
                <div class=\"text1\">
                    Ahmed Ali
                </div>
                <div class=\"text2\">
                    Senior Web Developer
                </div>
                <div class=\"follow\">
                    <div class=\"twitt\">
                    </div>
                    <h3>Follow</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"portfolio\">
    <div class=\"pre-wrapper\">
        <div class=\"title\">
            <div class=\"text1\">Elegant & Genuine</div>
            <div class=\"text2\">This is how our works looks like :)</div>
        </div>
        <div class=\"arrow\">
            <div class=\"all-cont\">
                <div class=\"content sms port15\">
                    <h4>
                            4 15 SMS Clouds
                    </h4>
                </div>
                <div class=\"content blue port14\">
                    <h4>
                        4 14 Blue Apple Soft
                    </h4>
                </div>
                <div class=\"content together port13\">
                    <h4>
                        4 13 Together Application
                    </h4>
                </div>
                <div class=\"content barcelona port12\">
                    <h4>
                        4 12 FCBarcelona Club
                    </h4>
                </div>
            
                <div class=\"content sms port11\">
                    <h4>
                            3 11 SMS Clouds
                    </h4>
                </div>
                <div class=\"content blue port10\">
                    <h4>
                        3 10 Blue Apple Soft
                    </h4>
                </div>
                <div class=\"content together port9\">
                    <h4>
                        3 9 Together Application
                    </h4>
                </div>
                <div class=\"content barcelona port8\">
                    <h4>
                        3 8 FCBarcelona Club
                    </h4>
                </div>
            
                <div class=\"content sms port7\">
                    <h4>
                            2 7 SMS Clouds
                    </h4>
                </div>
                <div class=\"content blue port6\">
                    <h4>
                        2 6 Blue Apple Soft
                    </h4>
                </div>
                <div class=\"content together port5\">
                    <h4>
                        2 5 Together Application
                    </h4>
                </div>
                <div class=\"content barcelona port4\">
                    <h4>
                        2 4 FCBarcelona Club
                    </h4>
                </div>
                
                <div class=\"content sms port3\">
                    <h4>
                            1 3 SMS Clouds
                    </h4>
                </div>
                <div class=\"content blue port2\">
                    <h4>
                        1 2 Blue Apple Soft
                    </h4>
                </div>
                <div class=\"content together port1\">
                    <h4>
                        1 1 Together Application
                    </h4>
                </div>
                <div class=\"content barcelona port0\">
                    <h4>
                        1 0 FCBarcelona Club
                    </h4>
                </div>
                
            </div>
            <span class=\"pagination\">
                    <div class=\"grey0 grey\">
                    </div>
                    <div class=\"grey1 grey\">
                    </div>
                    <div class=\"grey2 grey\">
                    </div>
                    <div class=\"grey3 grey\">
                    </div>
            </span>
            <img src=\"./img/arrow_portp.png\" class=\"arrow_portp\">
            <img src=\"./img/arrow_portn.png\" class=\"arrow_portn\">
        </div>
    </div>
    <div class=\"pre-wrapper\">
            <div class=\"all-cont2\">
                <div class=\"content start\">
                    <div class=\"title\">
                        <h2>Start Up</h2>
                        <h3>
                            For beginners
                        </h3>
                    </div>
                </div>
                    <div class=\"content standard\">
                        <div class=\"title\">
                            <h2>
                                Standard
                            </h2>
                            <h3>
                                More than what you have dreamed with
                            </h3>
                        </div>
                    </div>
                <div class=\"content professional\">
                    <div class=\"title\">
                        <h2>
                            Professional
                        </h2>
                        <h3>
                            For smart people
                        </h3>
                    </div>
                </div>  
            </div>
    </div>
</div>

<div class=\"icon-prc\">
    <span class=\"icon\">
        <div></div>
    </span>
    <div id=\"pricing\">
        <div class=\"pre-wrapper\">
                <div class=\"all-cont2\">
                    <div class=\"content start\">
                        <h3>Basic pages</h3>
                        <h3>MySQL Databases</h3>
                        <h3>Bandwith</h3>
                        <h3>Storage space</h3>
                        <div class=\"price\">
                            <h3 class=\"s\">\$</h3>
                            <h2 class=\"val\">15</h2>
                            <h3 class=\"mo\">/mo</h3>
                            <h2 class=\"order\">Order</h2>
                        </div>
                    </div>
                    <div class=\"content standard\">                  
                        <h3>Standard pages</h3>
                        <h3>MySQL Databases</h3>
                        <h3>Bandwith</h3>
                        <h3>Storage space</h3>
                        <div class=\"price\">
                            <h3 class=\"s\">\$</h3>
                            <h2 class=\"val\">25</h2>
                            <h3 class=\"mo\">/mo</h3>
                            <h2 class=\"order\">Order</h2>
                        </div>
                    </div>
                    <div class=\"content professional\">
                        <h3>Basic pages</h3>
                        <h3>MySQL Databases</h3>
                        <h3>Bandwith</h3>
                        <h3>Storage space</h3>
                        <div class=\"price\">
                            <h3 class=\"s\">\$</h3>
                            <h2 class=\"val\">35</h2>
                            <h3 class=\"mo\">/mo</h3>
                            <h2 class=\"order\">Order</h2>
                        </div>
                    </div>
                </div>
        </div>
        <h3><a href=#>And more available plans for all needs .... Check here</a></h3>
    </div>
</div>

<div id=\"tweets\">
    <div class=\"arrows\">
        <div class=\"arrows_pre\"></div>
        <div class=\"arrows_nxt\"></div>
        <div class=\"pre-wrapper\">
            <h2>Latest Tweets</h2>
            <h3>This is how to keep in touch :)</h3>
            <img src=\"./img/twitter_icon.png\"></br>
            <h3 class=\"abd\"><a href=#>@ Abd-Alrahaman Elgazzar</a> Great work Abd-Alrahaman, i really love the application ... hope you haveall the luck in ur life ... also have alook here <a href=#>http://t.co/zfdgfdg</a></h3>
        </div>
    </div>
</div>

<footer id=\"footer\">
    <div class=\"copyrite-soc\">
        <div class=\"pre-wrapper\">
            <h3>&copy; 2013 <span>Motion Template</span>. Design by Begha</h3>
            <span class=\"f\"><a href=\"\"></a></span>
            <span class=\"t\"><a href=\"\"></a></span>
            <span class=\"r\"><a href=\"\"></a></span>
        </div>
    </div>
    <div class=\"contact\">
        <div class=\"content\">
            <h2>Contact Us</h2>
            <h3>7oroof@oroof.com</h3>
            <h3>You address goes here</h3>
        </div>
        <div class=\"rect\"></div>
    </div>
</footer>

</body>
";
        
        $__internal_0c731e1cf879a250eb35375943baf93f1bc3c2233b3b2376e967735ed2afcc42->leave($__internal_0c731e1cf879a250eb35375943baf93f1bc3c2233b3b2376e967735ed2afcc42_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c5912b67da41f086295ce2d48bb18495716808de2a21ffc54084308c82c7747 = $this->env->getExtension("native_profiler");
        $__internal_6c5912b67da41f086295ce2d48bb18495716808de2a21ffc54084308c82c7747->enter($__internal_6c5912b67da41f086295ce2d48bb18495716808de2a21ffc54084308c82c7747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blogblog/css/index.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    ";
        
        $__internal_6c5912b67da41f086295ce2d48bb18495716808de2a21ffc54084308c82c7747->leave($__internal_6c5912b67da41f086295ce2d48bb18495716808de2a21ffc54084308c82c7747_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29b257111c64395ee09e7fdaa9e157d6a0ac22bd06176e0dac4bf0bcdb1511de = $this->env->getExtension("native_profiler");
        $__internal_29b257111c64395ee09e7fdaa9e157d6a0ac22bd06176e0dac4bf0bcdb1511de->enter($__internal_29b257111c64395ee09e7fdaa9e157d6a0ac22bd06176e0dac4bf0bcdb1511de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "  
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blogblog/js/jquery.min_.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/blogblog/js/myjs_.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_29b257111c64395ee09e7fdaa9e157d6a0ac22bd06176e0dac4bf0bcdb1511de->leave($__internal_29b257111c64395ee09e7fdaa9e157d6a0ac22bd06176e0dac4bf0bcdb1511de_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_3964260cb006566abf913db1e63bfc92d8c53a8c093a308f343bd2f7f705b751 = $this->env->getExtension("native_profiler");
        $__internal_3964260cb006566abf913db1e63bfc92d8c53a8c093a308f343bd2f7f705b751->enter($__internal_3964260cb006566abf913db1e63bfc92d8c53a8c093a308f343bd2f7f705b751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "                ";
        
        $__internal_3964260cb006566abf913db1e63bfc92d8c53a8c093a308f343bd2f7f705b751->leave($__internal_3964260cb006566abf913db1e63bfc92d8c53a8c093a308f343bd2f7f705b751_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  565 => 50,  559 => 49,  550 => 10,  546 => 9,  538 => 8,  528 => 6,  522 => 5,  95 => 58,  86 => 51,  84 => 49,  77 => 45,  70 => 41,  62 => 36,  36 => 12,  33 => 8,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <title>MyLanding</title>*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/blogblog/css/index.css') }}" type="text/css" rel="stylesheet">*/
/*     {% endblock %}*/
/*     {% block javascripts %}  */
/*         <script src="{{ asset('bundles/blogblog/js/jquery.min_.js') }}"></script>*/
/*         <script src="{{ asset('bundles/blogblog/js/myjs_.js') }}"></script>*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* <div class="btn_up"> &uarr; </div>*/
/* <header id="header">    */
/*         <div class="motion">            */
/*             <div class="pre-wrapper">*/
/*                 <div class="logo">*/
/*                 </div>*/
/*                 <div class="menu">*/
/*                     <ul>*/
/*                         <li><a href=#>Home</a></li>*/
/*                         <li><a href=#>About</a></li>*/
/*                         <li><a href=#>Team</a></li>*/
/*                         <li><a href=#>Portfolio</a></li>*/
/*                         <li><a href=#>Other</a></li>*/
/*                         <li><a href=#>Contact</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="slider">        */
/*             <div class="pre-wrapper">           */
/*                 <div class="wel-to-mot">*/
/*                     <a href="{{ path('blog_blog_homepage') }}" >Welcom to Motion</a>*/
/*                 </div>*/
/*                 <div class="asmart">*/
/*                     Asmart & Creative Single Page Template*/
/*                 </div>*/
/*                 <form action="{{ path('blog_blog_search') }}" method="POST" class="form-search">*/
/*                     <input type="text" name="search" class="input-medium search-query">*/
/*                     <input type="submit" class="bin" value="Искать">*/
/*                 </form>*/
/*                 <!--<form action="{{ path('blog_blog_word', { word: 'word' }) }}" method="GET" class="form-search">*/
/*                     <input type="text" name="param" class="input-medium search-query">*/
/*                     <input type="submit" class="bin" value="Искать">*/
/*                 </form>-->*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             */
/*             <div class="sldr safari_browser_screen">*/
/*                     <div class="div_phone"> */
/*                         <div class="general_background">*/
/*                             <div class="shape_bar">*/
/*                                 <div class="dots">*/
/*                                     <img src="{{ asset('bundles/blogblog/img/yellow.png') }}" class="yellow">*/
/*                                     <img src="./img/red.png" class="red">   */
/*                                     <img src="./img/green.png" class="green">*/
/*                                 </div>*/
/*                                 <div class="arrows-shbar">*/
/*                                     <img src="./img/arrows_shbar.png">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="put_your_desing_here">*/
/*                                 <!--<img src="./img/put_your_desing_here.png">-->*/
/*                             </div>                      */
/*                         </div>*/
/*                         <div class="iphone_screen"> */
/*                         </div>*/
/*                         <div class="sldr sm back">*/
/*                             <div class="general_background">*/
/*                                 <div class="shape_bar">*/
/*                                     <div class="dots">*/
/*                                         <img src="./img/yellow.png" class="yellow">*/
/*                                         <img src="./img/red.png" class="red">   */
/*                                         <img src="./img/green.png" class="green">*/
/*                                     </div>*/
/*                                     <div class="arrows-shbar">*/
/*                                         <img src="./img/arrows_shbar.png">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="put_your_desing_here">*/
/*                                     <!--<img src="./img/back.png">-->*/
/*                                 </div>                      */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="sldr sm next">*/
/*                                 <div class="general_background">*/
/*                                     <div class="shape_bar">*/
/*                                         <div class="dots">*/
/*                                             <img src="./img/yellow.png" class="yellow">*/
/*                                             <img src="./img/red.png" class="red">   */
/*                                             <img src="./img/green.png" class="green">*/
/*                                         </div>*/
/*                                         <div class="arrows-shbar">*/
/*                                             <img src="./img/arrows_shbar.png">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="put_your_desing_here">*/
/*                                         <!--<img src="./img/back2.png">-->*/
/*                                     </div>                      */
/*                                 </div>*/
/*                         </div>*/
/*                         <!--<div class="sldr safari_browser_screen my2">*/
/*                             <div class="general_background">*/
/*                                 <div class="shape_bar">*/
/*                                     <div class="dots">*/
/*                                     */
/*                                     </div>*/
/*                                     <div class="arrows-shbar">*/
/*                                         <img src="./img/arrows_shbar.png">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="put_your_desing_here">*/
/*                                     */
/*                                 </div>*/
/*                                 */
/*                             </div>*/
/*                         </div>-->*/
/*                     </div>*/
/*             </div>*/
/*                 */
/*                     <a class="arrow_prev">*/
/*                         <img src="./img/arrow-prev.png">*/
/*                     </a>*/
/*                 */
/*                 */
/*                     <a class="arrow_next">*/
/*                         <img src="./img/arrow-next.png">*/
/*                     </a>*/
/*                 */
/*             */
/*         </div>*/
/* </header>*/
/* */
/* <div id="merits">*/
/*     <div class="pre-wrapper">*/
/*         <div class="title">*/
/*             <div class="text1">Smart & Creative</div>*/
/*             <div class="text2">This is why you will use it :)</div>*/
/*         </div>*/
/*         <div class="content">*/
/*             <div class="met-wrapper">*/
/*                 <div class="circle multi">  */
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Multi purpose*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Lorem ipsum dolor sit amet, consectetur adipisicing...*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="content">*/
/*             <div class="met-wrapper">*/
/*                 <div class="circle flat">   */
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Flat UI*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Lorem ipsum dolor sit amet, consectetur adipisicing...*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="content">*/
/*             <div class="met-wrapper">*/
/*                 <div class="circle creative">   */
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Creative Design*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Lorem ipsum dolor sit amet, consectetur adipisicing...*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="team">*/
/*     <div class="pre-wrapper">*/
/*         <div class="title">*/
/*             <div class="text1">Talented & Experts</div>*/
/*             <div class="text2">This is our team :)</div>*/
/*         </div>*/
/*         <div class="all-cont">*/
/*             <div class="content">*/
/*                 <div class="elipse mahmoud">*/
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Mahmoude Baghagho*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Senior UI Designer*/
/*                 </div>*/
/*                 <div class="follow">*/
/*                     <div class="twitt">*/
/*                     </div>*/
/*                     <h3>Follow</h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="content">*/
/*                 <div class="elipse abd">*/
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Abd ElRahman*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Senior App Developer*/
/*                 </div>*/
/*                 <div class="follow">*/
/*                     <div class="twitt">*/
/*                     </div>*/
/*                     <h3>Follow</h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="content">*/
/*                 <div class="elipse mostafa">*/
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Mostafa Amin*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Senior Graphic Designer*/
/*                 </div>*/
/*                 <div class="follow">*/
/*                     <div class="twitt">*/
/*                     </div>*/
/*                     <h3>Follow</h3>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="content">*/
/*                 <div class="elipse ahmed">*/
/*                 </div>*/
/*                 <div class="text1">*/
/*                     Ahmed Ali*/
/*                 </div>*/
/*                 <div class="text2">*/
/*                     Senior Web Developer*/
/*                 </div>*/
/*                 <div class="follow">*/
/*                     <div class="twitt">*/
/*                     </div>*/
/*                     <h3>Follow</h3>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="portfolio">*/
/*     <div class="pre-wrapper">*/
/*         <div class="title">*/
/*             <div class="text1">Elegant & Genuine</div>*/
/*             <div class="text2">This is how our works looks like :)</div>*/
/*         </div>*/
/*         <div class="arrow">*/
/*             <div class="all-cont">*/
/*                 <div class="content sms port15">*/
/*                     <h4>*/
/*                             4 15 SMS Clouds*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content blue port14">*/
/*                     <h4>*/
/*                         4 14 Blue Apple Soft*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content together port13">*/
/*                     <h4>*/
/*                         4 13 Together Application*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content barcelona port12">*/
/*                     <h4>*/
/*                         4 12 FCBarcelona Club*/
/*                     </h4>*/
/*                 </div>*/
/*             */
/*                 <div class="content sms port11">*/
/*                     <h4>*/
/*                             3 11 SMS Clouds*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content blue port10">*/
/*                     <h4>*/
/*                         3 10 Blue Apple Soft*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content together port9">*/
/*                     <h4>*/
/*                         3 9 Together Application*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content barcelona port8">*/
/*                     <h4>*/
/*                         3 8 FCBarcelona Club*/
/*                     </h4>*/
/*                 </div>*/
/*             */
/*                 <div class="content sms port7">*/
/*                     <h4>*/
/*                             2 7 SMS Clouds*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content blue port6">*/
/*                     <h4>*/
/*                         2 6 Blue Apple Soft*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content together port5">*/
/*                     <h4>*/
/*                         2 5 Together Application*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content barcelona port4">*/
/*                     <h4>*/
/*                         2 4 FCBarcelona Club*/
/*                     </h4>*/
/*                 </div>*/
/*                 */
/*                 <div class="content sms port3">*/
/*                     <h4>*/
/*                             1 3 SMS Clouds*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content blue port2">*/
/*                     <h4>*/
/*                         1 2 Blue Apple Soft*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content together port1">*/
/*                     <h4>*/
/*                         1 1 Together Application*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="content barcelona port0">*/
/*                     <h4>*/
/*                         1 0 FCBarcelona Club*/
/*                     </h4>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*             <span class="pagination">*/
/*                     <div class="grey0 grey">*/
/*                     </div>*/
/*                     <div class="grey1 grey">*/
/*                     </div>*/
/*                     <div class="grey2 grey">*/
/*                     </div>*/
/*                     <div class="grey3 grey">*/
/*                     </div>*/
/*             </span>*/
/*             <img src="./img/arrow_portp.png" class="arrow_portp">*/
/*             <img src="./img/arrow_portn.png" class="arrow_portn">*/
/*         </div>*/
/*     </div>*/
/*     <div class="pre-wrapper">*/
/*             <div class="all-cont2">*/
/*                 <div class="content start">*/
/*                     <div class="title">*/
/*                         <h2>Start Up</h2>*/
/*                         <h3>*/
/*                             For beginners*/
/*                         </h3>*/
/*                     </div>*/
/*                 </div>*/
/*                     <div class="content standard">*/
/*                         <div class="title">*/
/*                             <h2>*/
/*                                 Standard*/
/*                             </h2>*/
/*                             <h3>*/
/*                                 More than what you have dreamed with*/
/*                             </h3>*/
/*                         </div>*/
/*                     </div>*/
/*                 <div class="content professional">*/
/*                     <div class="title">*/
/*                         <h2>*/
/*                             Professional*/
/*                         </h2>*/
/*                         <h3>*/
/*                             For smart people*/
/*                         </h3>*/
/*                     </div>*/
/*                 </div>  */
/*             </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="icon-prc">*/
/*     <span class="icon">*/
/*         <div></div>*/
/*     </span>*/
/*     <div id="pricing">*/
/*         <div class="pre-wrapper">*/
/*                 <div class="all-cont2">*/
/*                     <div class="content start">*/
/*                         <h3>Basic pages</h3>*/
/*                         <h3>MySQL Databases</h3>*/
/*                         <h3>Bandwith</h3>*/
/*                         <h3>Storage space</h3>*/
/*                         <div class="price">*/
/*                             <h3 class="s">$</h3>*/
/*                             <h2 class="val">15</h2>*/
/*                             <h3 class="mo">/mo</h3>*/
/*                             <h2 class="order">Order</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="content standard">                  */
/*                         <h3>Standard pages</h3>*/
/*                         <h3>MySQL Databases</h3>*/
/*                         <h3>Bandwith</h3>*/
/*                         <h3>Storage space</h3>*/
/*                         <div class="price">*/
/*                             <h3 class="s">$</h3>*/
/*                             <h2 class="val">25</h2>*/
/*                             <h3 class="mo">/mo</h3>*/
/*                             <h2 class="order">Order</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="content professional">*/
/*                         <h3>Basic pages</h3>*/
/*                         <h3>MySQL Databases</h3>*/
/*                         <h3>Bandwith</h3>*/
/*                         <h3>Storage space</h3>*/
/*                         <div class="price">*/
/*                             <h3 class="s">$</h3>*/
/*                             <h2 class="val">35</h2>*/
/*                             <h3 class="mo">/mo</h3>*/
/*                             <h2 class="order">Order</h2>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*         <h3><a href=#>And more available plans for all needs .... Check here</a></h3>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="tweets">*/
/*     <div class="arrows">*/
/*         <div class="arrows_pre"></div>*/
/*         <div class="arrows_nxt"></div>*/
/*         <div class="pre-wrapper">*/
/*             <h2>Latest Tweets</h2>*/
/*             <h3>This is how to keep in touch :)</h3>*/
/*             <img src="./img/twitter_icon.png"></br>*/
/*             <h3 class="abd"><a href=#>@ Abd-Alrahaman Elgazzar</a> Great work Abd-Alrahaman, i really love the application ... hope you haveall the luck in ur life ... also have alook here <a href=#>http://t.co/zfdgfdg</a></h3>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <footer id="footer">*/
/*     <div class="copyrite-soc">*/
/*         <div class="pre-wrapper">*/
/*             <h3>&copy; 2013 <span>Motion Template</span>. Design by Begha</h3>*/
/*             <span class="f"><a href=""></a></span>*/
/*             <span class="t"><a href=""></a></span>*/
/*             <span class="r"><a href=""></a></span>*/
/*         </div>*/
/*     </div>*/
/*     <div class="contact">*/
/*         <div class="content">*/
/*             <h2>Contact Us</h2>*/
/*             <h3>7oroof@oroof.com</h3>*/
/*             <h3>You address goes here</h3>*/
/*         </div>*/
/*         <div class="rect"></div>*/
/*     </div>*/
/* </footer>*/
/* */
/* </body>*/
/* */
