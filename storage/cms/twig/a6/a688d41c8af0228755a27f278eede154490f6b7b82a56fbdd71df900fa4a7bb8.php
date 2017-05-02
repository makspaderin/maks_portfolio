<?php

/* /var/www/html/themes/demo/pages/index.htm */
class __TwigTemplate_f8d0c0278b0e9f201efb263308b2cfc476f8723345ba59928a4bba2fb819853d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<body id=\"mainpage\">
        <div class=\"container-fluid\">
            <div id=\"conlink\">
              <p>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contacts"));
        echo "</p>
            </div>
            <a href=\"/\"><div id=\"logolink\">
             MP
            </div></a>
        </div>

      <nav id=\"contactsbar\">
        <a><img src=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/close.png");
        echo "\" class=\"grow\" id=\"close\" alt=\"close it\"></a>
        <ul>
\t          <li>Telegram: mvpaderin </li>
              <li>Skype: Maksim Paderin</li>
              <li>Email: <a href=\"mailto:mvpaderin@gmail.com\">mvpaderin@gmail.com</a></li>
              <li>
              <div>
                <a class=\"fb socicons\" href=\"https://www.facebook.com/maksim.paderin\" target=\"_blank\">
                        <img class=\"fbb\" src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/fb.png");
        echo "\">
                        <img class=\"fbw\" src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/fb_white.png");
        echo "\">
                        </a>
                <a class=\"ld socicons\" href=\"https://www.linkedin.com/in/makspaderin\" target=\"_blank\">
                        <img class=\"ldb\" src=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/linkedin.png");
        echo "\">
                        <img class=\"ldw\" src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/linkedin_white.png");
        echo "\">
                        </a>
                <a class=\"gh socicons\" href=\"https://github.com/makspaderin\" target=\"_blank\">
                        <img class=\"ghb\" src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/octocat.png");
        echo "\">
                        <img class=\"ghw\" src=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/octocat_white.png");
        echo "\">
                        </a>
                <a class=\"cv socicons\" href=\"https://drive.google.com/open?id=0B7M7tHZKiaIpbW91YWUwcFpBYVU\" target=\"_blank\">
                        <img class=\"cvb\" src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/cv.png");
        echo "\">
                        <img class=\"cvw\" src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/cv_white.png");
        echo "\">
                        </a>
\t\t<!-- <a class=\"in socicons\" href=\"https://www.instagram.com/makspaderin/\" target=\"_blank\">
                        <img class=\"inb\" src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/instagram.png");
        echo "\">
                        <img class=\"inw\" src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/instagram_white.png");
        echo "\">
                        </a> -->
\t\t<a class=\"vk socicons\" href=\"https://vk.com/makspaderin\" target=\"_blank\">
                        <img class=\"vkb\" src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/vk.png");
        echo "\">
                        <img class=\"vkw\" src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/vk_white.png");
        echo "\">
                        </a>           
\t\t      </div>
              </li>
        </ul>
      </nav>

      <section id=\"homepage\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 homepagetext\">
                    <h1>Hi. I'm Maks.</h1>
                    <h2>";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("A third year Finnish student and a beginning web developer."));
        echo "</h2>
                    <br>
                    <a class=\"page-scroll\" href=\"#portfoliosection\"><div class=\"btn mainbtn hvr-sweep-to-right\">
                      <p>";
        // line 56
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Works"));
        echo " <!-- &darr; --> </p>
                    </div></a>
                </div>
            </div>
        </div>
      </section>

      <section id=\"portfoliosection\">
            <div class=\"portfolioitem top left col-xs-12 col-lg-offset-2 col-lg-4\">
              <a href=\"uma\">
                <img class=\"portfolioimg\" src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/scr/uma.png");
        echo "\" alt=\"UmaGraphics\">
                <div class=\"overlay\">
                  <p class=\"description\">UmaGraphics</p>
                </div>
              </a>
            </div>
            <div class=\"portfolioitem top right col-xs-12 col-lg-4\">
              <a href=\"online\">
                <img class=\"portfolioimg\" src=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/scr/online.png");
        echo "\" alt=\"OnLine\">
                <div class=\"overlay\">
                    <p class=\"description\">OnLine</p>
                </div>
              </a>
            </div>
            <div class=\"portfolioitem left col-xs-12 col-lg-offset-2 col-lg-4\">
              <a href=\"serenity\">
                <img class=\"portfolioimg\" src=\"";
        // line 82
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/scr/serenity.png");
        echo "\" alt=\"Serenity\">
                <div class=\"overlay\">
                  <p class=\"description\">Serenity</p>
                </div>
              </a>
            </div>
            <div class=\"portfolioitem right col-xs-12 col-lg-4\">
              <a href=\"oceanideas\">
                <img class=\"portfolioimg\" src=\"";
        // line 90
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/scr/oceanideas.png");
        echo "\" alt=\"Serenity\">
                <div class=\"overlay\">
                  <p class=\"description\">OceanIdeas</p>
                </div>
              </a>
            </div>
      </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 90,  156 => 82,  145 => 74,  134 => 66,  121 => 56,  115 => 53,  100 => 41,  96 => 40,  90 => 37,  86 => 36,  80 => 33,  76 => 32,  70 => 29,  66 => 28,  60 => 25,  56 => 24,  50 => 21,  46 => 20,  35 => 12,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body id=\"mainpage\">
        <div class=\"container-fluid\">
            <div id=\"conlink\">
              <p>{{'Contacts'|_}}</p>
            </div>
            <a href=\"/\"><div id=\"logolink\">
             MP
            </div></a>
        </div>

      <nav id=\"contactsbar\">
        <a><img src=\"{{'assets/img/icons/close.png' | theme}}\" class=\"grow\" id=\"close\" alt=\"close it\"></a>
        <ul>
\t          <li>Telegram: mvpaderin </li>
              <li>Skype: Maksim Paderin</li>
              <li>Email: <a href=\"mailto:mvpaderin@gmail.com\">mvpaderin@gmail.com</a></li>
              <li>
              <div>
                <a class=\"fb socicons\" href=\"https://www.facebook.com/maksim.paderin\" target=\"_blank\">
                        <img class=\"fbb\" src=\"{{'assets/img/icons/fb.png' | theme}}\">
                        <img class=\"fbw\" src=\"{{'assets/img/icons/fb_white.png' | theme}}\">
                        </a>
                <a class=\"ld socicons\" href=\"https://www.linkedin.com/in/makspaderin\" target=\"_blank\">
                        <img class=\"ldb\" src=\"{{'assets/img/icons/linkedin.png' | theme}}\">
                        <img class=\"ldw\" src=\"{{'assets/img/icons/linkedin_white.png' | theme}}\">
                        </a>
                <a class=\"gh socicons\" href=\"https://github.com/makspaderin\" target=\"_blank\">
                        <img class=\"ghb\" src=\"{{'assets/img/icons/octocat.png' | theme}}\">
                        <img class=\"ghw\" src=\"{{'assets/img/icons/octocat_white.png' | theme}}\">
                        </a>
                <a class=\"cv socicons\" href=\"https://drive.google.com/open?id=0B7M7tHZKiaIpbW91YWUwcFpBYVU\" target=\"_blank\">
                        <img class=\"cvb\" src=\"{{'assets/img/icons/cv.png' | theme}}\">
                        <img class=\"cvw\" src=\"{{'assets/img/icons/cv_white.png' | theme}}\">
                        </a>
\t\t<!-- <a class=\"in socicons\" href=\"https://www.instagram.com/makspaderin/\" target=\"_blank\">
                        <img class=\"inb\" src=\"{{'assets/img/icons/instagram.png' | theme}}\">
                        <img class=\"inw\" src=\"{{'assets/img/icons/instagram_white.png' | theme}}\">
                        </a> -->
\t\t<a class=\"vk socicons\" href=\"https://vk.com/makspaderin\" target=\"_blank\">
                        <img class=\"vkb\" src=\"{{'assets/img/icons/vk.png' | theme}}\">
                        <img class=\"vkw\" src=\"{{'assets/img/icons/vk_white.png' | theme}}\">
                        </a>           
\t\t      </div>
              </li>
        </ul>
      </nav>

      <section id=\"homepage\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 homepagetext\">
                    <h1>Hi. I'm Maks.</h1>
                    <h2>{{'A third year Finnish student and a beginning web developer.'|_}}</h2>
                    <br>
                    <a class=\"page-scroll\" href=\"#portfoliosection\"><div class=\"btn mainbtn hvr-sweep-to-right\">
                      <p>{{'Works'|_}} <!-- &darr; --> </p>
                    </div></a>
                </div>
            </div>
        </div>
      </section>

      <section id=\"portfoliosection\">
            <div class=\"portfolioitem top left col-xs-12 col-lg-offset-2 col-lg-4\">
              <a href=\"uma\">
                <img class=\"portfolioimg\" src=\"{{'assets/img/scr/uma.png' | theme}}\" alt=\"UmaGraphics\">
                <div class=\"overlay\">
                  <p class=\"description\">UmaGraphics</p>
                </div>
              </a>
            </div>
            <div class=\"portfolioitem top right col-xs-12 col-lg-4\">
              <a href=\"online\">
                <img class=\"portfolioimg\" src=\"{{'assets/img/scr/online.png' | theme}}\" alt=\"OnLine\">
                <div class=\"overlay\">
                    <p class=\"description\">OnLine</p>
                </div>
              </a>
            </div>
            <div class=\"portfolioitem left col-xs-12 col-lg-offset-2 col-lg-4\">
              <a href=\"serenity\">
                <img class=\"portfolioimg\" src=\"{{'assets/img/scr/serenity.png' | theme}}\" alt=\"Serenity\">
                <div class=\"overlay\">
                  <p class=\"description\">Serenity</p>
                </div>
              </a>
            </div>
            <div class=\"portfolioitem right col-xs-12 col-lg-4\">
              <a href=\"oceanideas\">
                <img class=\"portfolioimg\" src=\"{{'assets/img/scr/oceanideas.png' | theme}}\" alt=\"Serenity\">
                <div class=\"overlay\">
                  <p class=\"description\">OceanIdeas</p>
                </div>
              </a>
            </div>
      </section>", "/var/www/html/themes/demo/pages/index.htm", "");
    }
}
