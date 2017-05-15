<?php

/* HomeBlogDefaultBundle:Default:index.html.twig */
class __TwigTemplate_886f5cc0a1310cbb1c01b53ab1b7173e9caa94cf75fe18a1cf5c68c739fb6d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HomeBlogDefault/layout.html.twig", "HomeBlogDefaultBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HomeBlogDefault/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d580ae49ee70ca11c5376fbbeaa7467ead83fe1250d09927189a5acb61b0570f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d580ae49ee70ca11c5376fbbeaa7467ead83fe1250d09927189a5acb61b0570f->enter($__internal_d580ae49ee70ca11c5376fbbeaa7467ead83fe1250d09927189a5acb61b0570f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogDefaultBundle:Default:index.html.twig"));

        $__internal_c1c4cdce77f0cfd9c70347d75f686320ab893295de12dde14f6f9ebb01c8c972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c4cdce77f0cfd9c70347d75f686320ab893295de12dde14f6f9ebb01c8c972->enter($__internal_c1c4cdce77f0cfd9c70347d75f686320ab893295de12dde14f6f9ebb01c8c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogDefaultBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d580ae49ee70ca11c5376fbbeaa7467ead83fe1250d09927189a5acb61b0570f->leave($__internal_d580ae49ee70ca11c5376fbbeaa7467ead83fe1250d09927189a5acb61b0570f_prof);

        
        $__internal_c1c4cdce77f0cfd9c70347d75f686320ab893295de12dde14f6f9ebb01c8c972->leave($__internal_c1c4cdce77f0cfd9c70347d75f686320ab893295de12dde14f6f9ebb01c8c972_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_805ae9dbca0e8a881ed9cf9e01844c21125db3da99d029595b68894d277e33b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805ae9dbca0e8a881ed9cf9e01844c21125db3da99d029595b68894d277e33b6->enter($__internal_805ae9dbca0e8a881ed9cf9e01844c21125db3da99d029595b68894d277e33b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_2e5fb310fc023b5114fcc8128bb6493385c3a83f04049e4d2b4ccc2939e21b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5fb310fc023b5114fcc8128bb6493385c3a83f04049e4d2b4ccc2939e21b9d->enter($__internal_2e5fb310fc023b5114fcc8128bb6493385c3a83f04049e4d2b4ccc2939e21b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    <section class=\"xv-owl-slider default\">
        <div class=\"container\">
            <div class=\"xv-owl-wrap\">
                <figure>
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img4.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"1200\" height=\"570\"/>
                    <figcaption><h1><a href=\"#\">Street in Monaco, Its awesome, isn't it?</a></h1>
                        <span class=\"cat\">Category</span></figcaption>
                </figure>
                <figure>
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img2.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"1200\" height=\"570\"/>
                    <figcaption><h1><a href=\"#\">Lorem ipsum dolor, its dummy text</a></h1>
                        <span class=\"cat\">Category</span></figcaption>
                </figure>
                <figure>
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/homeblogdefault/assets/demo-data/img9.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"1200\" height=\"570\"/>
                    <figcaption><h1><a href=\"#\">Yes! Yes! we have lived this moment once</a></h1>
                        <span class=\"cat\">Category</span></figcaption>
                </figure>
            </div>
        </div>
    </section>
";
        
        $__internal_2e5fb310fc023b5114fcc8128bb6493385c3a83f04049e4d2b4ccc2939e21b9d->leave($__internal_2e5fb310fc023b5114fcc8128bb6493385c3a83f04049e4d2b4ccc2939e21b9d_prof);

        
        $__internal_805ae9dbca0e8a881ed9cf9e01844c21125db3da99d029595b68894d277e33b6->leave($__internal_805ae9dbca0e8a881ed9cf9e01844c21125db3da99d029595b68894d277e33b6_prof);

    }

    public function getTemplateName()
    {
        return "HomeBlogDefaultBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  63 => 12,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HomeBlogDefault/layout.html.twig\" %}
{% block slider %}
    <section class=\"xv-owl-slider default\">
        <div class=\"container\">
            <div class=\"xv-owl-wrap\">
                <figure>
                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img4.jpg\") }}\" alt=\"\" width=\"1200\" height=\"570\"/>
                    <figcaption><h1><a href=\"#\">Street in Monaco, Its awesome, isn't it?</a></h1>
                        <span class=\"cat\">Category</span></figcaption>
                </figure>
                <figure>
                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img2.jpg\") }}\" alt=\"\" width=\"1200\" height=\"570\"/>
                    <figcaption><h1><a href=\"#\">Lorem ipsum dolor, its dummy text</a></h1>
                        <span class=\"cat\">Category</span></figcaption>
                </figure>
                <figure>
                    <img src=\"{{ asset(\"bundles/homeblogdefault/assets/demo-data/img9.jpg\") }}\" alt=\"\" width=\"1200\" height=\"570\"/>
                    <figcaption><h1><a href=\"#\">Yes! Yes! we have lived this moment once</a></h1>
                        <span class=\"cat\">Category</span></figcaption>
                </figure>
            </div>
        </div>
    </section>
{% endblock %}", "HomeBlogDefaultBundle:Default:index.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\DefaultBundle/Resources/views/Default/index.html.twig");
    }
}
