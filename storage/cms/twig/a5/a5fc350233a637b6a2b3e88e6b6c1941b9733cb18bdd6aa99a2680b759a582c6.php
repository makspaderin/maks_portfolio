<?php

/* /var/www/html/themes/demo/pages/online.htm */
class __TwigTemplate_0886a6799617730efc71547ef228ecb596dcf7d79d616e73b5e566a98d3a7573 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/fullwp/online.jpg");
        echo "\" alt=\"OnLine\">
\t        </div>
\t        <div class=\"piicontent col-xs-12 col-lg-6\">
\t\t<div class=\"piitext\">
\t            <h1> OnLine </h1>
\t            <h2> OnLine is a small-sized IT company from Yaroslavl, Russia. <br><br> The website is written from scratch but the layout idea was taken from Bootstrap Creative template. <br><br> Role: Front-End Developer, Designer.</h2>
\t            <a href=\"http://optinet.ru\" target=\"_blank\"><div class=\"btn mainbtn hvr-sweep-to-right\">
\t              <p>View</p>
\t            </div></a>
\t\t</div>
\t        </div>
      </section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/online.htm";
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
\t            <img src=\"{{'assets/img/fullwp/online.jpg' | theme }}\" alt=\"OnLine\">
\t        </div>
\t        <div class=\"piicontent col-xs-12 col-lg-6\">
\t\t<div class=\"piitext\">
\t            <h1> OnLine </h1>
\t            <h2> OnLine is a small-sized IT company from Yaroslavl, Russia. <br><br> The website is written from scratch but the layout idea was taken from Bootstrap Creative template. <br><br> Role: Front-End Developer, Designer.</h2>
\t            <a href=\"http://optinet.ru\" target=\"_blank\"><div class=\"btn mainbtn hvr-sweep-to-right\">
\t              <p>View</p>
\t            </div></a>
\t\t</div>
\t        </div>
      </section>", "/var/www/html/themes/demo/pages/online.htm", "");
    }
}
