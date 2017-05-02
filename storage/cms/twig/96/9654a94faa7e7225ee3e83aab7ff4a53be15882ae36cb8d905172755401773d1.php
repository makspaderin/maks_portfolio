<?php

/* /var/www/html/themes/demo/pages/uma.htm */
class __TwigTemplate_731aaec5b57ce742a04f966f60b1051196556e8e87a77132fbbd87d51e49dcad extends Twig_Template
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
        echo "<body id=\"piipage\">
        <div class=\"container-fluid\">
            <a href=\"/#portfoliosection\"><div id=\"backlink\">
              <p>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Back"));
        echo "</p>
            </div></a>
            <a href=\"/\"><div id=\"logolink\">
             MP
            </div></a>
        </div>

      <section id=\"portfolioiteminfo\">
\t      \t<div class=\"piiimg col-xs-12 col-lg-6\">
\t            <img src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/fullwp/uma.jpg");
        echo "\" alt=\"UmaGraphics\">
\t        </div>
\t        <div class=\"piicontent col-xs-12 col-lg-6\">
            \t<div class=\"piitext\">
\t            <h1> UmaGraphics </h1>
\t            <h2> UmaGraphics is an Italian 3D modeling company based in Milano. <br><br> The website was created using Mazel template. <br><br> Role: Front-End Developer, Back-End Developer, Designer.</h2>
\t            <a href=\"http://uma-graphics.com\" target=\"_blank\"><div class=\"btn mainbtn hvr-sweep-to-right\">
\t              <p>View</p>
\t            </div></a>
            </div>
          </div>
      </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/uma.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body id=\"piipage\">
        <div class=\"container-fluid\">
            <a href=\"/#portfoliosection\"><div id=\"backlink\">
              <p>{{'Back'|_}}</p>
            </div></a>
            <a href=\"/\"><div id=\"logolink\">
             MP
            </div></a>
        </div>

      <section id=\"portfolioiteminfo\">
\t      \t<div class=\"piiimg col-xs-12 col-lg-6\">
\t            <img src=\"{{'assets/img/fullwp/uma.jpg' | theme }}\" alt=\"UmaGraphics\">
\t        </div>
\t        <div class=\"piicontent col-xs-12 col-lg-6\">
            \t<div class=\"piitext\">
\t            <h1> UmaGraphics </h1>
\t            <h2> UmaGraphics is an Italian 3D modeling company based in Milano. <br><br> The website was created using Mazel template. <br><br> Role: Front-End Developer, Back-End Developer, Designer.</h2>
\t            <a href=\"http://uma-graphics.com\" target=\"_blank\"><div class=\"btn mainbtn hvr-sweep-to-right\">
\t              <p>View</p>
\t            </div></a>
            </div>
          </div>
      </section>", "/var/www/html/themes/demo/pages/uma.htm", "");
    }
}
