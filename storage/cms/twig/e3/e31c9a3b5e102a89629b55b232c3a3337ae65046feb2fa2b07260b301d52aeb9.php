<?php

/* /var/www/html/themes/demo/pages/oceanideas.htm */
class __TwigTemplate_eba8172cf13b5aa04b33127a72c07b61e082d933db4beb817e6b1fc612dc64c1 extends Twig_Template
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
              <p>Back</p>
            </div></a>
            <a href=\"/\"><div id=\"logolink\">
             MP
            </div></a>
        </div>

      <section id=\"portfolioiteminfo\">
\t      \t<div class=\"piiimg col-xs-12 col-lg-6\">
\t            <img src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/fullwp/oceanideas.png");
        echo "\" alt=\"OceanIdeas\">
\t        </div>
\t        <div class=\"piicontent col-xs-12 col-lg-6\">
\t\t<div class=\"piitext\">
\t            <h1> OceanIdeas </h1>
\t            <h2> OceanIdeas is a 3D-modelling agency from Auckland, New Zealand. <br><br> The website is written from scratch. <br><br> Role: Front-End Developer, Designer.</h2>
\t            <a href=\"http://oceanideas.nz\" target=\"_blank\"><div class=\"btn mainbtn hvr-sweep-to-right\">
\t              <p>View</p>
\t            </div></a>
\t\t</div>
\t        </div>
      </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/oceanideas.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
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
              <p>Back</p>
            </div></a>
            <a href=\"/\"><div id=\"logolink\">
             MP
            </div></a>
        </div>

      <section id=\"portfolioiteminfo\">
\t      \t<div class=\"piiimg col-xs-12 col-lg-6\">
\t            <img src=\"{{'assets/img/fullwp/oceanideas.png' | theme }}\" alt=\"OceanIdeas\">
\t        </div>
\t        <div class=\"piicontent col-xs-12 col-lg-6\">
\t\t<div class=\"piitext\">
\t            <h1> OceanIdeas </h1>
\t            <h2> OceanIdeas is a 3D-modelling agency from Auckland, New Zealand. <br><br> The website is written from scratch. <br><br> Role: Front-End Developer, Designer.</h2>
\t            <a href=\"http://oceanideas.nz\" target=\"_blank\"><div class=\"btn mainbtn hvr-sweep-to-right\">
\t              <p>View</p>
\t            </div></a>
\t\t</div>
\t        </div>
      </section>", "/var/www/html/themes/demo/pages/oceanideas.htm", "");
    }
}
