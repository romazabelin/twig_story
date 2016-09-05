<?php

/* index.tmpl */
class __TwigTemplate_62b1089174d6c779b346b3ef64a3dfbfff6b359a45128e79204f815867032c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('layout', $context, $blocks);
    }

    public function block_layout($context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("index.tmpl", "index.tmpl", 3, "428879659")->display($context);
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.tmpl";
    }

    public function getDebugInfo()
    {
        return array (  31 => 19,  29 => 3,  26 => 2,  20 => 1,);
    }
}


/* index.tmpl */
class __TwigTemplate_62b1089174d6c779b346b3ef64a3dfbfff6b359a45128e79204f815867032c48_428879659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("main.tmpl", "index.tmpl", 3);
        $this->blocks = array(
            'title_page' => array($this, 'block_title_page'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.tmpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title_page($context, array $blocks = array())
    {
        // line 6
        echo "Stories project
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row\">
<div class=\"col-md-12\">
Hello!
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 10,  81 => 9,  76 => 6,  73 => 5,  55 => 3,  31 => 19,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block layout %}*/
/* */
/* {% embed 'main.tmpl' %}*/
/* */
/* {% block title_page%}*/
/* Stories project*/
/* {%endblock%}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/* <div class="col-md-12">*/
/* Hello!*/
/* </div>*/
/* </div>*/
/* */
/* {% endblock%}*/
/* */
/* {% endembed %}*/
/* */
/* {% endblock%}*/
