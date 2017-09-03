<?php

/* templates/contact.form.twig.html */
class __TwigTemplate_f6aefd52e3e1be486f992e00828ba729295fe74c64c7de06686db78761a33396 extends Twig_Template
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
        $context["form"] = $this->loadTemplate("templates/form.twig.html", "templates/contact.form.twig.html", 1);
        // line 2
        echo "<form method=\"POST\" action=\"contact/sendMail\" class=\"form\">
\t";
        // line 3
        echo $context["form"]->getinput("name", "Votre nom");
        echo "
\t";
        // line 4
        echo $context["form"]->getinput("mail", "Votre adresse email", array("type" => "email"));
        echo "
    ";
        // line 5
        echo $context["form"]->gettextarea("message", "Votre message");
        echo "
    ";
        // line 6
        echo $context["form"]->gethiddenInput("url", (isset($context["url"]) ? $context["url"] : null));
        echo "
    ";
        // line 7
        echo $context["form"]->gethiddenInput("token", (isset($context["token"]) ? $context["token"] : null));
        echo "
    ";
        // line 8
        echo $context["form"]->getsubmit("Envoyer", array("inputClass" => "btn btn-primary submit"));
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "templates/contact.form.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'templates/form.twig.html' as form %}
<form method=\"POST\" action=\"contact/sendMail\" class=\"form\">
\t{{ form.input('name', 'Votre nom') }}
\t{{ form.input('mail', 'Votre adresse email', { type: 'email' } ) }}
    {{ form.textarea('message', 'Votre message') }}
    {{ form.hiddenInput('url', url) }}
    {{ form.hiddenInput('token', token) }}
    {{ form.submit('Envoyer', { inputClass: 'btn btn-primary submit' }) }}
</form>", "templates/contact.form.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\templates\\contact.form.twig.html");
    }
}
