<?php

/* core/themes/classy/templates/navigation/toolbar.html.twig */
class __TwigTemplate_0cbe1f949e30def2812a3fdb8bf6e1cfa09a02085ff83ac681cb334f51060066 extends Twig_Template
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
        $tags = array("for" => 26, "set" => 27, "spaceless" => 30, "if" => 32);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'spaceless', 'if'),
                array(),
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

        // line 23
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "toolbar"), "method"), "html", null, true));
        echo ">
  <nav";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["toolbar_attributes"] ?? null), "addClass", array(0 => "toolbar-bar", 1 => "clearfix"), "method"), "html", null, true));
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["toolbar_heading"] ?? null), "html", null, true));
        echo "</h2>";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 27
            $context["tray"] = $this->getAttribute(($context["trays"] ?? null), $context["key"], array(), "array");
            // line 28
            echo "      <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["tab"], "attributes", array()), "addClass", array(0 => "toolbar-tab"), "method"), "html", null, true));
            echo ">";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["tab"], "link", array()), "html", null, true));
            // line 30
            ob_start();
            // line 31
            echo "          <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["tray"] ?? null), "attributes", array()), "html", null, true));
            echo ">";
            // line 32
            if ($this->getAttribute(($context["tray"] ?? null), "label", array())) {
                // line 33
                echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["tray"] ?? null), "label", array()), "html", null, true));
                echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["tray"] ?? null), "label", array()), "html", null, true));
                echo "</h3>";
            } else {
                // line 36
                echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">";
            }
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["tray"] ?? null), "links", array()), "html", null, true));
            echo "
            </nav>
          </div>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 42
            echo "      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </nav>";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["remainder"] ?? null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  99 => 44,  93 => 42,  87 => 38,  84 => 36,  80 => 34,  75 => 33,  73 => 32,  69 => 31,  67 => 30,  65 => 29,  61 => 28,  59 => 27,  55 => 26,  52 => 25,  48 => 24,  43 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/navigation/toolbar.html.twig", "C:\\laragon\\www\\stefanini\\core\\themes\\classy\\templates\\navigation\\toolbar.html.twig");
    }
}
