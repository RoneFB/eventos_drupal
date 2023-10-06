<?php

/* core/themes/classy/templates/navigation/pager.html.twig */
class __TwigTemplate_8d53ff59866403d9b4e347f559c49bb9425b074ebc110b2908c8f48423955d98 extends Twig_Template
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
        $tags = array("if" => 32, "for" => 59, "set" => 62);
        $filters = array("t" => 34, "without" => 39, "default" => 41);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'without', 'default'),
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

        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">";
            // line 37
            if ($this->getAttribute(($context["items"] ?? null), "first", array())) {
                // line 38
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page")));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array()), "attributes", array()), "href", "title"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 40
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", array(), "any", false, true), "text", array()), t("« First"))) : (t("« First"))), "html", null, true));
                echo "</span>
          </a>
        </li>";
            }
            // line 46
            if ($this->getAttribute(($context["items"] ?? null), "previous", array())) {
                // line 47
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 49
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 50
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array(), "any", false, true), "text", array()), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true));
                echo "</span>
          </a>
        </li>";
            }
            // line 55
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", array())) {
                // line 56
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>";
            }
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 60
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))));
                echo "\">";
                // line 61
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 62
                    $context["title"] = t("Current page");
                } else {
                    // line 64
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                }
                // line 66
                echo "          <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "attributes", array()), "href", "title"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page")))));
                echo "
            </span>";
                // line 70
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                // line 71
                echo "</a>
        </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", array())) {
                // line 76
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>";
            }
            // line 79
            if ($this->getAttribute(($context["items"] ?? null), "next", array())) {
                // line 80
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 81
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 82
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 83
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array(), "any", false, true), "text", array()), t("Next ›"))) : (t("Next ›"))), "html", null, true));
                echo "</span>
          </a>
        </li>";
            }
            // line 88
            if ($this->getAttribute(($context["items"] ?? null), "last", array())) {
                // line 89
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 90
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page")));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array()), "attributes", array()), "href", "title"), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 91
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 92
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", array(), "any", false, true), "text", array()), t("Last »"))) : (t("Last »"))), "html", null, true));
                echo "</span>
          </a>
        </li>";
            }
            // line 96
            echo "    </ul>
  </nav>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 96,  186 => 92,  182 => 91,  174 => 90,  171 => 89,  169 => 88,  163 => 83,  159 => 82,  151 => 81,  148 => 80,  146 => 79,  143 => 76,  141 => 75,  134 => 71,  132 => 70,  128 => 68,  119 => 66,  116 => 64,  113 => 62,  111 => 61,  107 => 60,  103 => 59,  100 => 56,  98 => 55,  92 => 50,  88 => 49,  80 => 48,  77 => 47,  75 => 46,  69 => 41,  65 => 40,  57 => 39,  54 => 38,  52 => 37,  48 => 34,  45 => 33,  43 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/navigation/pager.html.twig", "C:\\laragon\\www\\stefanini\\core\\themes\\classy\\templates\\navigation\\pager.html.twig");
    }
}
