<?php

/* story_list.tmpl */
class __TwigTemplate_4283a36020f1cf37a98f00ad1eba02f97dd2276f954417fbc9cea9d21e7dabd6 extends Twig_Template
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
        // line 54
        echo "



";
    }

    // line 1
    public function block_layout($context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("story_list.tmpl", "story_list.tmpl", 3, "1843093470")->display($context);
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "story_list.tmpl";
    }

    public function getDebugInfo()
    {
        return array (  38 => 52,  36 => 3,  33 => 2,  30 => 1,  22 => 54,  20 => 1,);
    }
}


/* story_list.tmpl */
class __TwigTemplate_4283a36020f1cf37a98f00ad1eba02f97dd2276f954417fbc9cea9d21e7dabd6_1843093470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("main.tmpl", "story_list.tmpl", 3);
        $this->blocks = array(
            'include_resource' => array($this, 'block_include_resource'),
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
    public function block_include_resource($context, array $blocks = array())
    {
        // line 6
        echo "<script src=\"js/story_list.js\"></script>
";
    }

    // line 9
    public function block_title_page($context, array $blocks = array())
    {
        // line 10
        echo "Story list
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_stories"]) ? $context["list_stories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 16
            echo "<div class=\"row\">
<div class=\"col-md-12\">
    <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["story"], "title", array()), "html", null, true);
            echo "</h3>
    <p>
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["story"], "description", array()), "html", null, true);
            echo "
    </p>
    ";
            // line 22
            if ($this->getAttribute($context["story"], "attachment_original_file_name", array())) {
                // line 23
                echo "    <a download href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["story"], "attachment", array()), "html", null, true);
                echo "\">
            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["story"], "attachment_original_file_name", array()), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 27
            echo "</div>
</div>
<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "


                  <!-- Pagination -->
                  ";
        // line 35
        if (((isset($context["total_count_page"]) ? $context["total_count_page"] : null) > 1)) {
            // line 36
            echo "                  <div class=\"row text-center\">
                                                      <div class=\"col-lg-12\">
                                                          <nav aria-label=\"Page navigation\">
                                                            <ul class=\"pagination\">
                                                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["total_count_page"]) ? $context["total_count_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 41
                echo "                                                            <li class=\"page-item ";
                if (((isset($context["page"]) ? $context["page"] : null) == $context["i"])) {
                    echo " active ";
                }
                echo "\"><a class=\"page-link\" href=\"story_list.php?page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                                                            </ul>
                                                          </nav>
                                                      </div>
                                                  </div>
                  ";
        }
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "story_list.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 48,  176 => 43,  161 => 41,  157 => 40,  151 => 36,  149 => 35,  143 => 31,  134 => 27,  128 => 24,  123 => 23,  121 => 22,  116 => 20,  111 => 18,  107 => 16,  103 => 15,  100 => 14,  97 => 13,  92 => 10,  89 => 9,  84 => 6,  81 => 5,  62 => 3,  38 => 52,  36 => 3,  33 => 2,  30 => 1,  22 => 54,  20 => 1,);
    }
}
/* {% block layout%}*/
/* */
/* {% embed 'main.tmpl' %}*/
/* */
/* {%block include_resource%}*/
/* <script src="js/story_list.js"></script>*/
/* {%endblock%}*/
/* */
/* {%block title_page%}*/
/* Story list*/
/* {%endblock%}*/
/* */
/* {% block content %}*/
/* */
/* {% for story in list_stories%}*/
/* <div class="row">*/
/* <div class="col-md-12">*/
/*     <h3>{{story.title}}</h3>*/
/*     <p>*/
/*         {{story.description}}*/
/*     </p>*/
/*     {%if story.attachment_original_file_name%}*/
/*     <a download href="{{story.attachment}}">*/
/*             {{story.attachment_original_file_name}}*/
/*         </a>*/
/*     {%endif%}*/
/* </div>*/
/* </div>*/
/* <hr>*/
/* {%endfor%}*/
/* */
/* */
/* */
/*                   <!-- Pagination -->*/
/*                   {%if total_count_page > 1%}*/
/*                   <div class="row text-center">*/
/*                                                       <div class="col-lg-12">*/
/*                                                           <nav aria-label="Page navigation">*/
/*                                                             <ul class="pagination">*/
/*                                                             {% for i in 1..total_count_page%}*/
/*                                                             <li class="page-item {%if page == i%} active {%endif%}"><a class="page-link" href="story_list.php?page={{i}}">{{i}}</a></li>*/
/*                                                             {%endfor%}*/
/*                                                             </ul>*/
/*                                                           </nav>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                   {%endif%}*/
/* */
/* {%endblock%}*/
/* */
/* {% endembed %}*/
/* */
/* {%endblock%}*/
/* */
/* */
/* */
/* */
/* */
