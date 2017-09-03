<?php

/* layout.twig.html */
class __TwigTemplate_cf0570d0910b0c6827e40ffaa043164b6867df16823b5a9f0a0013fbafc6d181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headtitle' => array($this, 'block_headtitle'),
            'headerImage' => array($this, 'block_headerImage'),
            'title' => array($this, 'block_title'),
            'grip' => array($this, 'block_grip'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('headtitle', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <!-- Custom CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/css/clean-blog.min.css\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/css/master.css\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header page-scroll\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        Menu <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "home\">Alexandra Dubreucq</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "home\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "blog\">Blog</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "contact\">Contact</a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin\">Dashboard</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/posts\">Articles</a></li>
                                <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/post/add\">Ajouter un article</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/tags\">Tags</a></li>
                                <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/tags/add\">Ajouter un tag</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/comments\">Commentaires</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Alert - Flash Message -->
        ";
        // line 69
        if ( !twig_test_empty((isset($context["flash"]) ? $context["flash"] : null))) {
            // line 70
            echo "            <div id=\"alert\" class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "type", array()), "html", null, true);
            echo "\">
                <span class=\"close\">×</span>
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "message", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 75
        echo "        <div class=\"flash\"></div>

        <!-- Page Header -->
        <header class=\"intro-header\">
            ";
        // line 79
        $this->displayBlock('headerImage', $context, $blocks);
        // line 80
        echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                        <div class=\"site-heading\">
                            <h1>";
        // line 84
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
                            <hr class=\"small\">
                            <span class=\"subheading\">";
        // line 86
        $this->displayBlock('grip', $context, $blocks);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class=\"container\">
            ";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                        <p class=\"copyright text-muted\">Copyright &copy; Alexandra Dubreucq - 2017</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- SCRIPTS -->
        <!-- jQuery -->
        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

        <!-- Custom scripts -->
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/master.js\"></script>
        ";
        // line 120
        $this->displayBlock('scripts', $context, $blocks);
        // line 121
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_headtitle($context, array $blocks = array())
    {
    }

    // line 79
    public function block_headerImage($context, array $blocks = array())
    {
    }

    // line 84
    public function block_title($context, array $blocks = array())
    {
    }

    // line 86
    public function block_grip($context, array $blocks = array())
    {
    }

    // line 95
    public function block_content($context, array $blocks = array())
    {
    }

    // line 120
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 120,  238 => 95,  233 => 86,  228 => 84,  223 => 79,  218 => 4,  212 => 121,  210 => 120,  206 => 119,  181 => 96,  179 => 95,  167 => 86,  162 => 84,  156 => 80,  154 => 79,  148 => 75,  142 => 72,  136 => 70,  134 => 69,  122 => 60,  117 => 58,  113 => 57,  108 => 55,  104 => 54,  99 => 52,  91 => 47,  85 => 44,  79 => 41,  70 => 35,  44 => 12,  40 => 11,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>{% block headtitle %}{% endblock %}</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <!-- Custom CSS -->
        <link href=\"{{ base_url }}public/css/clean-blog.min.css\" rel=\"stylesheet\">
        <link href=\"{{ base_url }}public/css/master.css\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>
        <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header page-scroll\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        Menu <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ base_url }}home\">Alexandra Dubreucq</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"{{ base_url }}home\">Accueil</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}blog\">Blog</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}contact\">Contact</a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ base_url }}admin\">Dashboard</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ base_url }}admin/posts\">Articles</a></li>
                                <li><a href=\"{{ base_url }}admin/post/add\">Ajouter un article</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ base_url }}admin/tags\">Tags</a></li>
                                <li><a href=\"{{ base_url }}admin/tags/add\">Ajouter un tag</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"{{ base_url }}admin/comments\">Commentaires</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Alert - Flash Message -->
        {% if flash is not empty %}
            <div id=\"alert\" class=\"alert alert-{{ flash.type }}\">
                <span class=\"close\">×</span>
                {{ flash.message }}
            </div>
        {% endif %}
        <div class=\"flash\"></div>

        <!-- Page Header -->
        <header class=\"intro-header\">
            {% block headerImage %}{% endblock %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                        <div class=\"site-heading\">
                            <h1>{% block title %}{% endblock %}</h1>
                            <hr class=\"small\">
                            <span class=\"subheading\">{% block grip %}{% endblock %}</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class=\"container\">
            {% block content %}{% endblock %}
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                        <p class=\"copyright text-muted\">Copyright &copy; Alexandra Dubreucq - 2017</p>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- SCRIPTS -->
        <!-- jQuery -->
        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

        <!-- Custom scripts -->
        <script src=\"{{ base_url }}public/js/master.js\"></script>
        {% block scripts %}{% endblock %}
    </body>
</html>
", "layout.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\layout.twig.html");
    }
}
