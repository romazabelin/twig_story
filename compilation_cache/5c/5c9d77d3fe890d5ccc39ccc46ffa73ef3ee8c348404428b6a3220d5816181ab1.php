<?php

/* main.tmpl */
class __TwigTemplate_4da38e527354a5c583d76d80649ee751c6a00aca6f607616571eeada1587c3a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'include_resource' => array($this, 'block_include_resource'),
            'title_page' => array($this, 'block_title_page'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head>
  <!-- Latest compiled and minified CSS -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

  <!-- Optional theme -->
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"css/style.css\">

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js\"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
  ";
        // line 13
        $this->displayBlock('include_resource', $context, $blocks);
        // line 14
        echo "  </head>

  <body>
  <!-- Navigation -->
      <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
          <div class=\"container\">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                      <span class=\"sr-only\">Toggle navigation</span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                  </button>
                  <a class=\"navbar-brand\" href=\"/\">Stories</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                  <ul class=\"nav navbar-nav\">
                      <li>
                          <a href=\"story_add.php\">Add story</a>
                      </li>
                      <li>
                          <a href=\"story_list.php\">List stories</a>
                      </li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>


      <!-- Page Content -->
          <div class=\"container\">

              <!-- Page Heading -->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <h1 class=\"page-header\">
                      ";
        // line 54
        $this->displayBlock('title_page', $context, $blocks);
        // line 55
        echo "                      </h1>
                  </div>
              </div>
              <!-- /.row -->


              ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "              <!-- /.row -->


          </div>

  </body>

</html>";
    }

    // line 13
    public function block_include_resource($context, array $blocks = array())
    {
    }

    // line 54
    public function block_title_page($context, array $blocks = array())
    {
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main.tmpl";
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  108 => 54,  103 => 13,  92 => 62,  90 => 61,  82 => 55,  80 => 54,  38 => 14,  36 => 13,  22 => 1,);
    }
}
/* <html>*/
/*   <head>*/
/*   <!-- Latest compiled and minified CSS -->*/
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*   <!-- Optional theme -->*/
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/*   <link rel="stylesheet" href="css/style.css">*/
/* */
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>*/
/*   <!-- Latest compiled and minified JavaScript -->*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*   {%block include_resource%}{%endblock%}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <!-- Navigation -->*/
/*       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*           <div class="container">*/
/*               <!-- Brand and toggle get grouped for better mobile display -->*/
/*               <div class="navbar-header">*/
/*                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                       <span class="sr-only">Toggle navigation</span>*/
/*                       <span class="icon-bar"></span>*/
/*                       <span class="icon-bar"></span>*/
/*                       <span class="icon-bar"></span>*/
/*                   </button>*/
/*                   <a class="navbar-brand" href="/">Stories</a>*/
/*               </div>*/
/*               <!-- Collect the nav links, forms, and other content for toggling -->*/
/*               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                   <ul class="nav navbar-nav">*/
/*                       <li>*/
/*                           <a href="story_add.php">Add story</a>*/
/*                       </li>*/
/*                       <li>*/
/*                           <a href="story_list.php">List stories</a>*/
/*                       </li>*/
/*                   </ul>*/
/*               </div>*/
/*               <!-- /.navbar-collapse -->*/
/*           </div>*/
/*           <!-- /.container -->*/
/*       </nav>*/
/* */
/* */
/*       <!-- Page Content -->*/
/*           <div class="container">*/
/* */
/*               <!-- Page Heading -->*/
/*               <div class="row">*/
/*                   <div class="col-lg-12">*/
/*                       <h1 class="page-header">*/
/*                       {%block title_page%}{%endblock%}*/
/*                       </h1>*/
/*                   </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/* */
/* */
/*               {% block content %}{% endblock %}*/
/*               <!-- /.row -->*/
/* */
/* */
/*           </div>*/
/* */
/*   </body>*/
/* */
/* </html>*/
