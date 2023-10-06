<?php

/* core/themes/classy/templates/views/views-view.html.twig */
class __TwigTemplate_c7841218cc66a41ffd0fc3c1bb984e6a97dfe7cbfa08d27a4e662f0d88a436e5 extends Twig_Template
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
        $tags = array("set" => 34, "if" => 44);
        $filters = array("clean_class" => 36);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 34
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), 2 => ("view-id-" .         // line 37
($context["id"] ?? null)), 3 => ("view-display-id-" .         // line 38
($context["display_id"] ?? null)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 42
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        // line 44
        if (($context["title"] ?? null)) {
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        }
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        // line 48
        if (($context["header"] ?? null)) {
            // line 49
            echo "    <div class=\"view-header\">";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 53
        if (($context["exposed"] ?? null)) {
            // line 54
            echo "    <div class=\"view-filters\">";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 58
        if (($context["attachment_before"] ?? null)) {
            // line 59
            echo "    <div class=\"attachment attachment-before\">";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 64
        if (($context["rows"] ?? null)) {
            // line 65
            echo "    <div class=\"view-content\">";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
    </div>";
        } elseif (        // line 68
($context["empty"] ?? null)) {
            // line 69
            echo "    <div class=\"view-empty\">";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 74
        if (($context["pager"] ?? null)) {
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
        }
        // line 77
        if (($context["attachment_after"] ?? null)) {
            // line 78
            echo "    <div class=\"attachment attachment-after\">";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 82
        if (($context["more"] ?? null)) {
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
        }
        // line 85
        if (($context["footer"] ?? null)) {
            // line 86
            echo "    <div class=\"view-footer\">";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 90
        if (($context["feed_icons"] ?? null)) {
            // line 91
            echo "    <div class=\"feed-icons\">";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
    </div>";
        }
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 95,  138 => 92,  136 => 91,  134 => 90,  129 => 87,  127 => 86,  125 => 85,  122 => 83,  120 => 82,  115 => 79,  113 => 78,  111 => 77,  108 => 75,  106 => 74,  101 => 70,  99 => 69,  97 => 68,  93 => 66,  91 => 65,  89 => 64,  84 => 60,  82 => 59,  80 => 58,  75 => 55,  73 => 54,  71 => 53,  66 => 50,  64 => 49,  62 => 48,  60 => 47,  57 => 45,  55 => 44,  53 => 43,  49 => 42,  47 => 39,  46 => 38,  45 => 37,  44 => 36,  43 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/views/views-view.html.twig", "C:\\laragon\\www\\stefanini\\core\\themes\\classy\\templates\\views\\views-view.html.twig");
    }
}
