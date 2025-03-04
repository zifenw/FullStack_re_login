<?php

/* privileges/require_options_item.twig */
class __TwigTemplate_de9e596365ca12b27653ae975c7738b052bc6d345af42a52dad05a1a92716908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"item\">
    ";
        // line 2
        if ($this->getAttribute(($context["require_option"] ?? null), "radio", [], "array")) {
            // line 3
            echo "        <input type=\"radio\" name=\"ssl_type\"
            id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "name", [], "array"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "value", [], "array"), "html", null, true);
            echo "\"
            title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "description", [], "array"), "html", null, true);
            echo "\"
            value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "value", [], "array"), "html", null, true);
            echo "\" ";
            echo $this->getAttribute(($context["require_option"] ?? null), "checked", [], "array");
            // line 7
            echo "/>
        <label for=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "name", [], "array"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "value", [], "array"), "html", null, true);
            echo "\">
            <code>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "label", [], "array"), "html", null, true);
            echo "</code>
        </label>
    ";
        } else {
            // line 12
            echo "        <label for=\"text_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "name", [], "array"), "html", null, true);
            echo "\">
            <code>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "label", [], "array"), "html", null, true);
            echo "</code>
        </label>
        <input type=\"text\" name=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "name", [], "array"), "html", null, true);
            echo "\"
            id=\"text_";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "name", [], "array"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "value", [], "array"), "html", null, true);
            echo "\"
            size=\"80\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["require_option"] ?? null), "description", [], "array"), "html", null, true);
            echo "\"";
            // line 18
            if ($this->getAttribute(($context["require_option"] ?? null), "disabled", [], "array")) {
                // line 19
                echo "                disabled";
            }
            // line 21
            echo "/>
    ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "privileges/require_options_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  84 => 21,  81 => 19,  79 => 18,  76 => 17,  70 => 16,  66 => 15,  61 => 13,  56 => 12,  50 => 9,  44 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "privileges/require_options_item.twig", "A:\\phpstudy_pro\\WWW\\phpMyAdmin4.8.5\\templates\\privileges\\require_options_item.twig");
    }
}
