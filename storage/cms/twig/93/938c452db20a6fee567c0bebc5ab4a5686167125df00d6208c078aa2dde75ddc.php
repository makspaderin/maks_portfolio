<?php

/* /var/www/html/themes/demo/pages/404.htm */
class __TwigTemplate_a7700bccce1e99f0bd5fb6d1269e793cc446ecdb474eff3068a4a1beba1054f0 extends Twig_Template
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
        echo "<section id=\"notfoundpage\">
        <div class=\"container\">
        \t<div class=\"notfoundtext\">
\t            <h1>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Oops!"));
        echo "</h1>
\t            <br>
\t            <h2>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("It seems that the page you're looking for doesn't exist."));
        echo "</h2>
\t            <a href=\"/\"><div class=\"btn mainbtn hvr-sweep-to-right\">
                      <p>Return</p>
                </div></a>
\t        </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/themes/demo/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"notfoundpage\">
        <div class=\"container\">
        \t<div class=\"notfoundtext\">
\t            <h1>{{'Oops!'|_}}</h1>
\t            <br>
\t            <h2>{{\"It seems that the page you're looking for doesn't exist.\" |_ }}</h2>
\t            <a href=\"/\"><div class=\"btn mainbtn hvr-sweep-to-right\">
                      <p>Return</p>
                </div></a>
\t        </div>
        </div>
</section>", "/var/www/html/themes/demo/pages/404.htm", "");
    }
}
