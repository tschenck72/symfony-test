<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c05b830f32aaf562203a6bafc526e931b9fa7bde0e4025f93a1407c1d2366b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05b830f32aaf562203a6bafc526e931b9fa7bde0e4025f93a1407c1d2366b0f->enter($__internal_c05b830f32aaf562203a6bafc526e931b9fa7bde0e4025f93a1407c1d2366b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1e3665d98b886821845c1cdcf4d0331be34d8fed347f71da63e31511a5ad28a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3665d98b886821845c1cdcf4d0331be34d8fed347f71da63e31511a5ad28a0->enter($__internal_1e3665d98b886821845c1cdcf4d0331be34d8fed347f71da63e31511a5ad28a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05b830f32aaf562203a6bafc526e931b9fa7bde0e4025f93a1407c1d2366b0f->leave($__internal_c05b830f32aaf562203a6bafc526e931b9fa7bde0e4025f93a1407c1d2366b0f_prof);

        
        $__internal_1e3665d98b886821845c1cdcf4d0331be34d8fed347f71da63e31511a5ad28a0->leave($__internal_1e3665d98b886821845c1cdcf4d0331be34d8fed347f71da63e31511a5ad28a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78ab7021a24b396ac151bc9bbfd9ba2ac7ba030088305e27893233a60592b0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ab7021a24b396ac151bc9bbfd9ba2ac7ba030088305e27893233a60592b0d8->enter($__internal_78ab7021a24b396ac151bc9bbfd9ba2ac7ba030088305e27893233a60592b0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8836bcfddc16a58b7119edf5a4544ddecd7cfe1e6ba99090103b15d88c90a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8836bcfddc16a58b7119edf5a4544ddecd7cfe1e6ba99090103b15d88c90a82->enter($__internal_e8836bcfddc16a58b7119edf5a4544ddecd7cfe1e6ba99090103b15d88c90a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8836bcfddc16a58b7119edf5a4544ddecd7cfe1e6ba99090103b15d88c90a82->leave($__internal_e8836bcfddc16a58b7119edf5a4544ddecd7cfe1e6ba99090103b15d88c90a82_prof);

        
        $__internal_78ab7021a24b396ac151bc9bbfd9ba2ac7ba030088305e27893233a60592b0d8->leave($__internal_78ab7021a24b396ac151bc9bbfd9ba2ac7ba030088305e27893233a60592b0d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a11143fffe3f1bed21455d11ed1c5884115963f5ed2b2bcec36d57132e2f17f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11143fffe3f1bed21455d11ed1c5884115963f5ed2b2bcec36d57132e2f17f9->enter($__internal_a11143fffe3f1bed21455d11ed1c5884115963f5ed2b2bcec36d57132e2f17f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5009995741ea7b597fc649cddad7bea70f0864f6829bbb79ce414caf7f17b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5009995741ea7b597fc649cddad7bea70f0864f6829bbb79ce414caf7f17b77->enter($__internal_d5009995741ea7b597fc649cddad7bea70f0864f6829bbb79ce414caf7f17b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d5009995741ea7b597fc649cddad7bea70f0864f6829bbb79ce414caf7f17b77->leave($__internal_d5009995741ea7b597fc649cddad7bea70f0864f6829bbb79ce414caf7f17b77_prof);

        
        $__internal_a11143fffe3f1bed21455d11ed1c5884115963f5ed2b2bcec36d57132e2f17f9->leave($__internal_a11143fffe3f1bed21455d11ed1c5884115963f5ed2b2bcec36d57132e2f17f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02fc3007711d214bb70bc18b0e9a476fa1f4b8e51475bcd68e796f47d0bd5b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fc3007711d214bb70bc18b0e9a476fa1f4b8e51475bcd68e796f47d0bd5b77->enter($__internal_02fc3007711d214bb70bc18b0e9a476fa1f4b8e51475bcd68e796f47d0bd5b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_feb466893b7e83fe3954a5cdb664a2756a22ef64fc3f3fb1f66a4f81c299a2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb466893b7e83fe3954a5cdb664a2756a22ef64fc3f3fb1f66a4f81c299a2a7->enter($__internal_feb466893b7e83fe3954a5cdb664a2756a22ef64fc3f3fb1f66a4f81c299a2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_feb466893b7e83fe3954a5cdb664a2756a22ef64fc3f3fb1f66a4f81c299a2a7->leave($__internal_feb466893b7e83fe3954a5cdb664a2756a22ef64fc3f3fb1f66a4f81c299a2a7_prof);

        
        $__internal_02fc3007711d214bb70bc18b0e9a476fa1f4b8e51475bcd68e796f47d0bd5b77->leave($__internal_02fc3007711d214bb70bc18b0e9a476fa1f4b8e51475bcd68e796f47d0bd5b77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/tobiasschenck/symfony/demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
