<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3363ddc8a5e8e2debb8819ff371acf3a77f025740684537bf70d248228c4abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3363ddc8a5e8e2debb8819ff371acf3a77f025740684537bf70d248228c4abe->enter($__internal_c3363ddc8a5e8e2debb8819ff371acf3a77f025740684537bf70d248228c4abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5b3bed57ecf405df9f421318e646f61edebc6413265575ec243a9f0d9ec7e70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3bed57ecf405df9f421318e646f61edebc6413265575ec243a9f0d9ec7e70d->enter($__internal_5b3bed57ecf405df9f421318e646f61edebc6413265575ec243a9f0d9ec7e70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c3363ddc8a5e8e2debb8819ff371acf3a77f025740684537bf70d248228c4abe->leave($__internal_c3363ddc8a5e8e2debb8819ff371acf3a77f025740684537bf70d248228c4abe_prof);

        
        $__internal_5b3bed57ecf405df9f421318e646f61edebc6413265575ec243a9f0d9ec7e70d->leave($__internal_5b3bed57ecf405df9f421318e646f61edebc6413265575ec243a9f0d9ec7e70d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae6c1c27d472dbc455444a5fe08b7688b4be60a813929204545681082975b817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6c1c27d472dbc455444a5fe08b7688b4be60a813929204545681082975b817->enter($__internal_ae6c1c27d472dbc455444a5fe08b7688b4be60a813929204545681082975b817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dfe66f0671f1a00312f61ecbecd3ac7cf21b82f8e4607e5fff80e18bf1910252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe66f0671f1a00312f61ecbecd3ac7cf21b82f8e4607e5fff80e18bf1910252->enter($__internal_dfe66f0671f1a00312f61ecbecd3ac7cf21b82f8e4607e5fff80e18bf1910252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dfe66f0671f1a00312f61ecbecd3ac7cf21b82f8e4607e5fff80e18bf1910252->leave($__internal_dfe66f0671f1a00312f61ecbecd3ac7cf21b82f8e4607e5fff80e18bf1910252_prof);

        
        $__internal_ae6c1c27d472dbc455444a5fe08b7688b4be60a813929204545681082975b817->leave($__internal_ae6c1c27d472dbc455444a5fe08b7688b4be60a813929204545681082975b817_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20974f6b54d781ae418eb44beda8b4c862fc08a5b35239e7edf0ae0db5ec1263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20974f6b54d781ae418eb44beda8b4c862fc08a5b35239e7edf0ae0db5ec1263->enter($__internal_20974f6b54d781ae418eb44beda8b4c862fc08a5b35239e7edf0ae0db5ec1263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_38d52d3307187a85b1362993fc67c4040126f6b4e33ee0022725a6805b2e52f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d52d3307187a85b1362993fc67c4040126f6b4e33ee0022725a6805b2e52f9->enter($__internal_38d52d3307187a85b1362993fc67c4040126f6b4e33ee0022725a6805b2e52f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38d52d3307187a85b1362993fc67c4040126f6b4e33ee0022725a6805b2e52f9->leave($__internal_38d52d3307187a85b1362993fc67c4040126f6b4e33ee0022725a6805b2e52f9_prof);

        
        $__internal_20974f6b54d781ae418eb44beda8b4c862fc08a5b35239e7edf0ae0db5ec1263->leave($__internal_20974f6b54d781ae418eb44beda8b4c862fc08a5b35239e7edf0ae0db5ec1263_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_91f74d5ce8a1b10220ceeaec4eb6d0ad1dff084cb170dc84a705de1153dc97f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f74d5ce8a1b10220ceeaec4eb6d0ad1dff084cb170dc84a705de1153dc97f8->enter($__internal_91f74d5ce8a1b10220ceeaec4eb6d0ad1dff084cb170dc84a705de1153dc97f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acf2568fad65f09798ceb015716a36e74d63315dce3c8388c3a618998ce3c546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf2568fad65f09798ceb015716a36e74d63315dce3c8388c3a618998ce3c546->enter($__internal_acf2568fad65f09798ceb015716a36e74d63315dce3c8388c3a618998ce3c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_acf2568fad65f09798ceb015716a36e74d63315dce3c8388c3a618998ce3c546->leave($__internal_acf2568fad65f09798ceb015716a36e74d63315dce3c8388c3a618998ce3c546_prof);

        
        $__internal_91f74d5ce8a1b10220ceeaec4eb6d0ad1dff084cb170dc84a705de1153dc97f8->leave($__internal_91f74d5ce8a1b10220ceeaec4eb6d0ad1dff084cb170dc84a705de1153dc97f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48b0f41cb731508c5b1d9616f2b6bab31cd5a20d53b9da9e064240775e03e18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b0f41cb731508c5b1d9616f2b6bab31cd5a20d53b9da9e064240775e03e18c->enter($__internal_48b0f41cb731508c5b1d9616f2b6bab31cd5a20d53b9da9e064240775e03e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca7d0f1c4b208f04ad0f66cd6f189e72f7c04fcc554d934c712221e9c34fe6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7d0f1c4b208f04ad0f66cd6f189e72f7c04fcc554d934c712221e9c34fe6ec->enter($__internal_ca7d0f1c4b208f04ad0f66cd6f189e72f7c04fcc554d934c712221e9c34fe6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca7d0f1c4b208f04ad0f66cd6f189e72f7c04fcc554d934c712221e9c34fe6ec->leave($__internal_ca7d0f1c4b208f04ad0f66cd6f189e72f7c04fcc554d934c712221e9c34fe6ec_prof);

        
        $__internal_48b0f41cb731508c5b1d9616f2b6bab31cd5a20d53b9da9e064240775e03e18c->leave($__internal_48b0f41cb731508c5b1d9616f2b6bab31cd5a20d53b9da9e064240775e03e18c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/tobiasschenck/symfony/demo/app/Resources/views/base.html.twig");
    }
}
