<?php

/* admin/layout.twig.html */
class __TwigTemplate_05c0de18ca820e8c195d6912afd5b3a6cd93e5e928398fbfd0527d41668dab6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headtitle' => array($this, 'block_headtitle'),
            'style' => array($this, 'block_style'),
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
        ";
        // line 4
        $this->displayBlock('headtitle', $context, $blocks);
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/css/admin/master.css\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Custom Fonts -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

        ";
        // line 18
        $this->displayBlock('style', $context, $blocks);
        // line 19
        echo "    </head>

    <body style=\"padding-top: 100px;\">
        <nav class=\"navbar navbar-default navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header page-scroll\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        Menu <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin\">Admin</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin\">Dashboard</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/posts\">Articles</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/comments\">Commentaires</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/tags\">Tags</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Site</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Alert - Flash Message -->
        ";
        // line 55
        if ( !twig_test_empty((isset($context["flash"]) ? $context["flash"] : null))) {
            // line 56
            echo "            <div id=\"alert\" class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "type", array()), "html", null, true);
            echo "\">
                <span class=\"close\">×</span>
                ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "message", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 61
        echo "        <div class=\"flash\"></div>

        <!-- Main Content -->
        <div class=\"container\">
            ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "        </div>

        <!-- SCRIPTS -->
        <!-- jQuery -->
        <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

        <!-- Custom scripts -->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "public/js/master.js\"></script>
        ";
        // line 77
        $this->displayBlock('scripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_headtitle($context, array $blocks = array())
    {
    }

    // line 18
    public function block_style($context, array $blocks = array())
    {
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/layout.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 77,  162 => 65,  157 => 18,  152 => 4,  146 => 78,  144 => 77,  140 => 76,  128 => 66,  126 => 65,  120 => 61,  114 => 58,  108 => 56,  106 => 55,  95 => 47,  89 => 44,  83 => 41,  77 => 38,  71 => 35,  62 => 29,  50 => 19,  48 => 18,  40 => 13,  30 => 5,  28 => 4,  23 => 1,);
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
        {% block headtitle %}{% endblock %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <!-- Custom CSS -->
        <link href=\"{{ base_url }}public/css/admin/master.css\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Custom Fonts -->
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

        {% block style %}{% endblock %}
    </head>

    <body style=\"padding-top: 100px;\">
        <nav class=\"navbar navbar-default navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header page-scroll\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        Menu <i class=\"fa fa-bars\"></i>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ base_url }}admin\">Admin</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"{{ base_url }}admin\">Dashboard</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}admin/posts\">Articles</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}admin/comments\">Commentaires</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}admin/tags\">Tags</a>
                        </li>
                        <li>
                            <a href=\"{{ base_url }}\">Site</a>
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

        <!-- Main Content -->
        <div class=\"container\">
            {% block content %}{% endblock %}
        </div>

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
", "admin/layout.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\admin\\layout.twig.html");
    }
}
