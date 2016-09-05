<?php

/* story_add.tmpl */
class __TwigTemplate_c659ff02f070de67de3780aedba31304063dcabfd3a8514351468af6cd747805 extends Twig_Template
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
        $this->loadTemplate("story_add.tmpl", "story_add.tmpl", 3, "174010600")->display($context);
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "story_add.tmpl";
    }

    public function getDebugInfo()
    {
        return array (  31 => 52,  29 => 3,  26 => 2,  20 => 1,);
    }
}


/* story_add.tmpl */
class __TwigTemplate_c659ff02f070de67de3780aedba31304063dcabfd3a8514351468af6cd747805_174010600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("main.tmpl", "story_add.tmpl", 3);
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
        echo "<script src=\"js/story_add.js\"></script>
";
    }

    // line 9
    public function block_title_page($context, array $blocks = array())
    {
        // line 10
        echo "Add story
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"row\">
<div class=\"col-md-12\">
                      <form class=\"form-horizontal\">
                        <div class=\"form-group\">
                          <label class=\"control-label col-sm-2\">Title:</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" id=\"story_title\" placeholder=\"Enter story title\">
                          </div>
                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label col-sm-2\">Description</label>
                            <div class=\"col-sm-10\">
                                <textarea id=\"story_description\" class=\"form-control\" placeholder=\"Story description\"></textarea>
                            </div>
                        </div>

                        <div class=\"form-group\">
                                                    <label class=\"control-label col-sm-2\">Attachment</label>
                                                    <div class=\"col-sm-10\">
                                                        <input id=\"story_file\" type=\"file\">
                                                    </div>
                                                </div>


                        <div class=\"form-group\">
                          <div class=\"col-sm-offset-2 col-sm-10\">
                            <button id=\"btn_add_story\" type=\"submit\" class=\"btn btn-default\">Add story</button>
                          </div>
                        </div>
                      </form>
                  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "story_add.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  90 => 13,  85 => 10,  82 => 9,  77 => 6,  74 => 5,  55 => 3,  31 => 52,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block layout %}*/
/* */
/* {% embed 'main.tmpl' %}*/
/* */
/* {%block include_resource%}*/
/* <script src="js/story_add.js"></script>*/
/* {%endblock%}*/
/* */
/* {% block title_page%}*/
/* Add story*/
/* {% endblock%}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/* <div class="col-md-12">*/
/*                       <form class="form-horizontal">*/
/*                         <div class="form-group">*/
/*                           <label class="control-label col-sm-2">Title:</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" class="form-control" id="story_title" placeholder="Enter story title">*/
/*                           </div>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="form-group">*/
/*                             <label class="control-label col-sm-2">Description</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <textarea id="story_description" class="form-control" placeholder="Story description"></textarea>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                                                     <label class="control-label col-sm-2">Attachment</label>*/
/*                                                     <div class="col-sm-10">*/
/*                                                         <input id="story_file" type="file">*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/* */
/*                         <div class="form-group">*/
/*                           <div class="col-sm-offset-2 col-sm-10">*/
/*                             <button id="btn_add_story" type="submit" class="btn btn-default">Add story</button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </form>*/
/*                   </div>*/
/* </div>*/
/* */
/* {% endblock%}*/
/* */
/* {% endembed %}*/
/* */
/* {%endblock%}*/
/* */
