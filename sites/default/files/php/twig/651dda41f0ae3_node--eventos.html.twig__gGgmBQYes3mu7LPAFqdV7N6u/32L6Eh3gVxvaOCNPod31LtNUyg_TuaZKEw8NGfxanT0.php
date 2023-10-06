<?php

/* themes/subtema/templates/node--eventos.html.twig */
class __TwigTemplate_245a522f6b54b57abc510fc2aa1a44333d0c6163b30a0eec91f7739be6520214 extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array("raw" => 8);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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

        // line 1
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">";
        // line 2
        if (($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_quantidade_de_vagas_ainda_", array()), "value", array()) > 0)) {
            // line 3
            echo "    <h1>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "title", array()), "value", array()), "html", null, true));
            echo "</h1>";
        } else {
            // line 5
            echo "    <h1>Desculpe, não há mais vagas para este evento!</h1>";
        }
        // line 7
        echo "    <h4>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_data_do_evento", array()), "value", array()), "html", null, true));
        echo "</h4>
    <pre>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute(($context["node"] ?? null), "body", array()), "summary", array())));
        echo "</pre>
    <h5>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_quantidade_de_vagas_ainda_", array()), "value", array()), "html", null, true));
        echo "</h5>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/subtema/templates/node--eventos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  62 => 8,  57 => 7,  54 => 5,  49 => 3,  47 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/subtema/templates/node--eventos.html.twig", "C:\\laragon\\www\\stefanini\\themes\\subtema\\templates\\node--eventos.html.twig");
    }
}
