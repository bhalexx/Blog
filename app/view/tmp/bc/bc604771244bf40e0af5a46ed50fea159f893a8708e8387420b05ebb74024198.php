<?php

/* templates/form.twig.html */
class __TwigTemplate_ba0a899e51d425746967f195045cb2bfae9285a18dff302626728bcfb7483b74 extends Twig_Template
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
        // line 7
        echo "
";
        // line 11
        echo "
";
        // line 17
        echo "
";
        // line 24
        echo "
";
        // line 31
        echo "
";
        // line 48
        echo "
";
        // line 65
        echo "
";
    }

    // line 1
    public function getinput($__name__ = null, $__label__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
\t\t<label for=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
\t\t<input type=\"";
            // line 4
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "type", array()), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"form-control ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "inputClass", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "value", array()), "html", null, true);
            echo "\" />
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function gethiddenInput($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function getsubmit($__text__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
\t\t<input type=\"submit\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "inputClass", array()), "html", null, true);
            echo "\" />
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function gettextarea($__name__ = null, $__label__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
\t\t<label for=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
\t\t<textarea name=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"form-control\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "value", array()), "html", null, true);
            echo "</textarea>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 25
    public function getcheckbox($__name__ = null, $__label__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo " checkbox-container\">\t\t
\t\t<input type=\"checkbox\" name=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"checkbox\" ";
            echo (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "checked", array())) ? ("checked") : (""));
            echo " />
\t\t<label for=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getselect($__name__ = null, $__label__ = null, $__selectOptions__ = null, $__keyName__ = null, $__valueName__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "selectOptions" => $__selectOptions__,
            "keyName" => $__keyName__,
            "valueName" => $__valueName__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
\t\t<label for=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
\t\t<select name=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiple", array())) ? ("[]") : (""));
            echo "\" class=\"form-control\" ";
            echo (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiple", array())) ? ("multiple") : (""));
            echo ">
\t\t\t";
            // line 36
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "insertBlank", array())) {
                // line 37
                echo "\t\t\t<option selected=\"true\"></option>
\t\t\t";
            }
            // line 39
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "placeholder", array())) {
                // line 40
                echo "\t\t\t<option selected=\"true\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "placeholderValue", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "placeholder", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 42
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selectOptions"]) ? $context["selectOptions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 43
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], (isset($context["keyName"]) ? $context["keyName"] : null)), "html", null, true);
                echo "\" ";
                echo (($this->getAttribute($context["option"], "selected", array())) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], (isset($context["valueName"]) ? $context["valueName"] : null)), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t</select>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getselectFromSimpleArray($__name__ = null, $__label__ = null, $__selectOptions__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "selectOptions" => $__selectOptions__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo "\">
\t\t<label for=\"";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
\t\t<select name=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiple", array())) ? ("[]") : (""));
            echo "\" class=\"form-control\" ";
            echo (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "multiple", array())) ? ("multiple") : (""));
            echo ">
\t\t\t";
            // line 53
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "insertBlank", array())) {
                // line 54
                echo "\t\t\t<option selected=\"true\"></option>
\t\t\t";
            }
            // line 56
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "placeholder", array())) {
                // line 57
                echo "\t\t\t<option selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "placeholder", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 59
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selectOptions"]) ? $context["selectOptions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 60
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t</select>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getinputFileImg($__name__ = null, $__label__ = null, $__img__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "img" => $__img__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "\t<div class=\"form-group ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "class", array()), "html", null, true);
            echo " file-container\">\t
\t\t<label for=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</label>
\t\t<input type=\"file\" name=\"";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" class=\"file-input ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "inputClass", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"upload\">
\t\t\t<span class=\"fa fa-picture-o icon\"></span>
\t\t\t<div id=\"preview\" style=\"background-image: url('";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "')\"></div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "templates/form.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 72,  448 => 69,  442 => 68,  437 => 67,  422 => 66,  405 => 62,  394 => 60,  389 => 59,  383 => 57,  380 => 56,  376 => 54,  374 => 53,  367 => 52,  361 => 51,  356 => 50,  341 => 49,  324 => 45,  311 => 43,  306 => 42,  298 => 40,  295 => 39,  291 => 37,  289 => 36,  282 => 35,  276 => 34,  271 => 33,  254 => 32,  234 => 28,  226 => 27,  221 => 26,  207 => 25,  187 => 21,  181 => 20,  176 => 19,  162 => 18,  142 => 14,  137 => 13,  124 => 12,  104 => 9,  91 => 8,  67 => 4,  61 => 3,  56 => 2,  42 => 1,  37 => 65,  34 => 48,  31 => 31,  28 => 24,  25 => 17,  22 => 11,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro input(name, label, options = []) %}
\t<div class=\"form-group {{ options.class }}\">
\t\t<label for=\"{{ name }}\">{{ label }}</label>
\t\t<input type=\"{{ options.type | default('text') }}\" name=\"{{ name }}\" class=\"form-control {{ options.inputClass }}\" value=\"{{ options.value }}\" />
\t</div>
{% endmacro %}

{% macro hiddenInput(name, value) %}
\t<input type=\"hidden\" name=\"{{ name }}\" value=\"{{ value }}\" />
{% endmacro %}

{% macro submit(text, options = []) %}
\t<div class=\"form-group {{ options.class }}\">
\t\t<input type=\"submit\" value=\"{{ text }}\" class=\"{{ options.inputClass }}\" />
\t</div>
{% endmacro%}

{% macro textarea(name, label, options = []) %}
\t<div class=\"form-group {{ options.class }}\">
\t\t<label for=\"{{ name }}\">{{ label }}</label>
\t\t<textarea name=\"{{ name }}\" class=\"form-control\">{{ options.value }}</textarea>
\t</div>
{% endmacro %}

{% macro checkbox(name, label, options = []) %}
\t<div class=\"form-group {{ options.class }} checkbox-container\">\t\t
\t\t<input type=\"checkbox\" name=\"{{ name }}\" id=\"{{ name }}\" class=\"checkbox\" {{ options.checked ? 'checked' : '' }} />
\t\t<label for=\"{{ name }}\"> {{ label }}</label>
\t</div>
{% endmacro %}

{% macro select(name, label, selectOptions, keyName, valueName, options = []) %}
\t<div class=\"form-group {{ options.class }}\">
\t\t<label for=\"{{ name }}\">{{ label }}</label>
\t\t<select name=\"{{ name }}{{ options.multiple ? \"[]\" : \"\" }}\" class=\"form-control\" {{ options.multiple ? \"multiple\" : \"\" }}>
\t\t\t{% if options.insertBlank %}
\t\t\t<option selected=\"true\"></option>
\t\t\t{% endif %}
\t\t\t{% if options.placeholder %}
\t\t\t<option selected=\"true\" value=\"{{ options.placeholderValue }}\">{{ options.placeholder }}</option>
\t\t\t{% endif %}
\t\t\t{% for option in selectOptions %}
\t\t\t\t<option value=\"{{ attribute(option, keyName) }}\" {{ option.selected ? 'selected' : \"\" }}>{{ attribute(option, valueName) }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
{% endmacro %}

{% macro selectFromSimpleArray(name, label, selectOptions, options = []) %}
\t<div class=\"form-group {{ options.class }}\">
\t\t<label for=\"{{ name }}\">{{ label }}</label>
\t\t<select name=\"{{ name }}{{ options.multiple ? \"[]\" : \"\" }}\" class=\"form-control\" {{ options.multiple ? \"multiple\" : \"\" }}>
\t\t\t{% if options.insertBlank %}
\t\t\t<option selected=\"true\"></option>
\t\t\t{% endif %}
\t\t\t{% if options.placeholder %}
\t\t\t<option selected=\"true\">{{ options.placeholder }}</option>
\t\t\t{% endif %}
\t\t\t{% for option in selectOptions %}
\t\t\t\t<option value=\"{{ option }}\">{{ option }}</option>
\t\t\t{% endfor %}
\t\t</select>
\t</div>
{% endmacro %}

{% macro inputFileImg(name, label, img, options = []) %}
\t<div class=\"form-group {{ options.class }} file-container\">\t
\t\t<label for=\"{{ name }}\">{{ label }}</label>
\t\t<input type=\"file\" name=\"{{ name }}\" class=\"file-input {{ options.inputClass }}\" />
\t\t<div class=\"upload\">
\t\t\t<span class=\"fa fa-picture-o icon\"></span>
\t\t\t<div id=\"preview\" style=\"background-image: url('{{ img }}')\"></div>
\t\t</div>
\t</div>
{% endmacro %}
", "templates/form.twig.html", "C:\\wamp64\\www\\oc\\parcours\\blog\\app\\view\\templates\\form.twig.html");
    }
}
