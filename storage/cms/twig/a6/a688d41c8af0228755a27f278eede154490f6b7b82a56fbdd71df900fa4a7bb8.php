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
              <p>Contacts</p>
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
              <!-- <div>
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
                        </a>
\t\t<a class=\"vk socicons\" href=\"https://vk.com/makspaderin\" target=\"_blank\">
                        <img class=\"vkb\" src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/vk.png");
        echo "\">
                        <img class=\"vkw\" src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/vk_white.png");
        echo "\">
                      </a> -->
\t\t      </div>
              </li>
        </ul>
      </nav>

      <section id=\"homepage\">
        <img src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/bg.jpg");
        echo "\" id=\"bgphoto\">
        <div class=\"container\">
            <div class=\"row\">
              <div id=\"bgcircle\">
                <div class=\"col-lg-12 homepagetext\">
                    <h1 id=\"hi\">Hi!</h1>
                    <h1 id=\"greeting\"> I'm Maks</h1>
                    <hr>
                    <h2>Finnish student and a <br> beginning web developer</h2>
                </div>
              </div>
                    <br>
                    <a class=\"page-scroll\" href=\"#portfoliosection\"><div class=\"btn mainbtn hvr-sweep-to-right\">
                      <p>Works</p>
                    </div></a>
                </div>
            </div>
        </div>
      </section>

      <section id=\"portfoliosection\">
            <div class=\"portfolioitem top left col-xs-12 col-lg-offset-2 col-lg-4\">
              <a href=\"uma\">
                <img class=\"portfolioimg\" src=\"";
        // line 72
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
        // line 80
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
        // line 88
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
        // line 96
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/scr/oceanideas.png");
        echo "\" alt=\"Serenity\">
                <div class=\"overlay\">
                  <p class=\"description\">OceanIdeas</p>
                </div>
              </a>
            </div>
      </section>

      <section id=\"contactssection\">
        <h1> Me in social networks </h1>
        <div>
          <a class=\"fb socicons\" href=\"https://www.facebook.com/maksim.paderin\" target=\"_blank\">
                  <img class=\"fbb\" src=\"";
        // line 108
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/fb.png");
        echo "\">
                  <img class=\"fbw\" src=\"";
        // line 109
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/fb_white.png");
        echo "\">
                  </a>
          <a class=\"ld socicons\" href=\"https://www.linkedin.com/in/makspaderin\" target=\"_blank\">
                  <img class=\"ldb\" src=\"";
        // line 112
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/linkedin.png");
        echo "\">
                  <img class=\"ldw\" src=\"";
        // line 113
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/linkedin_white.png");
        echo "\">
                  </a>
          <a class=\"gh socicons\" href=\"https://github.com/makspaderin\" target=\"_blank\">
                  <img class=\"ghb\" src=\"";
        // line 116
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/octocat.png");
        echo "\">
                  <img class=\"ghw\" src=\"";
        // line 117
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/octocat_white.png");
        echo "\">
                  </a>
          <!--  <a class=\"cv socicons\" href=\"https://drive.google.com/open?id=0B7M7tHZKiaIpbW91YWUwcFpBYVU\" target=\"_blank\">
                  <img class=\"cvb\" src=\"";
        // line 120
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/cv.png");
        echo "\">
                  <img class=\"cvw\" src=\"";
        // line 121
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/cv_white.png");
        echo "\">
                  </a>
          <a class=\"in socicons\" href=\"https://www.instagram.com/makspaderin/\" target=\"_blank\">
                  <img class=\"inb\" src=\"";
        // line 124
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/instagram.png");
        echo "\">
                  <img class=\"inw\" src=\"";
        // line 125
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/instagram_white.png");
        echo "\">
                  </a> -->
          <a class=\"vk socicons\" href=\"https://vk.com/makspaderin\" target=\"_blank\">
                  <img class=\"vkb\" src=\"";
        // line 128
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/vk.png");
        echo "\">
                  <img class=\"vkw\" src=\"";
        // line 129
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icons/vk_white.png");
        echo "\">
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
        return array (  236 => 129,  232 => 128,  226 => 125,  222 => 124,  216 => 121,  212 => 120,  206 => 117,  202 => 116,  196 => 113,  192 => 112,  186 => 109,  182 => 108,  167 => 96,  156 => 88,  145 => 80,  134 => 72,  108 => 49,  97 => 41,  93 => 40,  87 => 37,  83 => 36,  77 => 33,  73 => 32,  67 => 29,  63 => 28,  57 => 25,  53 => 24,  47 => 21,  43 => 20,  32 => 12,  19 => 1,);
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
              <p>Contacts</p>
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
              <!-- <div>
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
                        </a>
\t\t<a class=\"vk socicons\" href=\"https://vk.com/makspaderin\" target=\"_blank\">
                        <img class=\"vkb\" src=\"{{'assets/img/icons/vk.png' | theme}}\">
                        <img class=\"vkw\" src=\"{{'assets/img/icons/vk_white.png' | theme}}\">
                      </a> -->
\t\t      </div>
              </li>
        </ul>
      </nav>

      <section id=\"homepage\">
        <img src=\"{{'assets/img/bg.jpg' | theme}}\" id=\"bgphoto\">
        <div class=\"container\">
            <div class=\"row\">
              <div id=\"bgcircle\">
                <div class=\"col-lg-12 homepagetext\">
                    <h1 id=\"hi\">Hi!</h1>
                    <h1 id=\"greeting\"> I'm Maks</h1>
                    <hr>
                    <h2>Finnish student and a <br> beginning web developer</h2>
                </div>
              </div>
                    <br>
                    <a class=\"page-scroll\" href=\"#portfoliosection\"><div class=\"btn mainbtn hvr-sweep-to-right\">
                      <p>Works</p>
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
      </section>

      <section id=\"contactssection\">
        <h1> Me in social networks </h1>
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
          <!--  <a class=\"cv socicons\" href=\"https://drive.google.com/open?id=0B7M7tHZKiaIpbW91YWUwcFpBYVU\" target=\"_blank\">
                  <img class=\"cvb\" src=\"{{'assets/img/icons/cv.png' | theme}}\">
                  <img class=\"cvw\" src=\"{{'assets/img/icons/cv_white.png' | theme}}\">
                  </a>
          <a class=\"in socicons\" href=\"https://www.instagram.com/makspaderin/\" target=\"_blank\">
                  <img class=\"inb\" src=\"{{'assets/img/icons/instagram.png' | theme}}\">
                  <img class=\"inw\" src=\"{{'assets/img/icons/instagram_white.png' | theme}}\">
                  </a> -->
          <a class=\"vk socicons\" href=\"https://vk.com/makspaderin\" target=\"_blank\">
                  <img class=\"vkb\" src=\"{{'assets/img/icons/vk.png' | theme}}\">
                  <img class=\"vkw\" src=\"{{'assets/img/icons/vk_white.png' | theme}}\">
                  </a>
    </div>
      </section>", "/var/www/html/themes/demo/pages/index.htm", "");
    }
}
