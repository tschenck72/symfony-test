<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_665da802abffbfe7fb12fb7833b1dc05dd776b350ef54d4f5d8cdaa27c2424a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665da802abffbfe7fb12fb7833b1dc05dd776b350ef54d4f5d8cdaa27c2424a8->enter($__internal_665da802abffbfe7fb12fb7833b1dc05dd776b350ef54d4f5d8cdaa27c2424a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_89a932e5c4e299bdfa3f9f5e49a41cb91a2068a866f02987edec05fe7f146f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a932e5c4e299bdfa3f9f5e49a41cb91a2068a866f02987edec05fe7f146f0e->enter($__internal_89a932e5c4e299bdfa3f9f5e49a41cb91a2068a866f02987edec05fe7f146f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665da802abffbfe7fb12fb7833b1dc05dd776b350ef54d4f5d8cdaa27c2424a8->leave($__internal_665da802abffbfe7fb12fb7833b1dc05dd776b350ef54d4f5d8cdaa27c2424a8_prof);

        
        $__internal_89a932e5c4e299bdfa3f9f5e49a41cb91a2068a866f02987edec05fe7f146f0e->leave($__internal_89a932e5c4e299bdfa3f9f5e49a41cb91a2068a866f02987edec05fe7f146f0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c28eb26bb9f648b2e275f6c056c14e52f3228489afce613abae4b25a1e830ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c28eb26bb9f648b2e275f6c056c14e52f3228489afce613abae4b25a1e830ba->enter($__internal_2c28eb26bb9f648b2e275f6c056c14e52f3228489afce613abae4b25a1e830ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8631014d0fd5059761782938d4c18641e7033c2358d1b6ae9c90d35a48b9b422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8631014d0fd5059761782938d4c18641e7033c2358d1b6ae9c90d35a48b9b422->enter($__internal_8631014d0fd5059761782938d4c18641e7033c2358d1b6ae9c90d35a48b9b422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8631014d0fd5059761782938d4c18641e7033c2358d1b6ae9c90d35a48b9b422->leave($__internal_8631014d0fd5059761782938d4c18641e7033c2358d1b6ae9c90d35a48b9b422_prof);

        
        $__internal_2c28eb26bb9f648b2e275f6c056c14e52f3228489afce613abae4b25a1e830ba->leave($__internal_2c28eb26bb9f648b2e275f6c056c14e52f3228489afce613abae4b25a1e830ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bac8eab5baac5735d903c50b0cf2cedefe81458f03a991e3d8fa66d078506d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bac8eab5baac5735d903c50b0cf2cedefe81458f03a991e3d8fa66d078506d4->enter($__internal_3bac8eab5baac5735d903c50b0cf2cedefe81458f03a991e3d8fa66d078506d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e099ec2c6849217ab676d93d5290347d2021518a12fe5e16e110b90c5745495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e099ec2c6849217ab676d93d5290347d2021518a12fe5e16e110b90c5745495->enter($__internal_7e099ec2c6849217ab676d93d5290347d2021518a12fe5e16e110b90c5745495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7e099ec2c6849217ab676d93d5290347d2021518a12fe5e16e110b90c5745495->leave($__internal_7e099ec2c6849217ab676d93d5290347d2021518a12fe5e16e110b90c5745495_prof);

        
        $__internal_3bac8eab5baac5735d903c50b0cf2cedefe81458f03a991e3d8fa66d078506d4->leave($__internal_3bac8eab5baac5735d903c50b0cf2cedefe81458f03a991e3d8fa66d078506d4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f97abdac5cb4eb65b892c9bc8e0d9efaaf14c3171d660434de10f625ceaa65c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97abdac5cb4eb65b892c9bc8e0d9efaaf14c3171d660434de10f625ceaa65c0->enter($__internal_f97abdac5cb4eb65b892c9bc8e0d9efaaf14c3171d660434de10f625ceaa65c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac2cf57c760554d35b1f378a21773156e8102ee12856844c982120fac9197484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2cf57c760554d35b1f378a21773156e8102ee12856844c982120fac9197484->enter($__internal_ac2cf57c760554d35b1f378a21773156e8102ee12856844c982120fac9197484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ac2cf57c760554d35b1f378a21773156e8102ee12856844c982120fac9197484->leave($__internal_ac2cf57c760554d35b1f378a21773156e8102ee12856844c982120fac9197484_prof);

        
        $__internal_f97abdac5cb4eb65b892c9bc8e0d9efaaf14c3171d660434de10f625ceaa65c0->leave($__internal_f97abdac5cb4eb65b892c9bc8e0d9efaaf14c3171d660434de10f625ceaa65c0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/tobiasschenck/symfony/demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
