<?php

/* HomeBlogAdminBundle:Article:add.html.twig */
class __TwigTemplate_da3137432a894cffeaf54bef83adb9afecdf1547664e270ea863961a02478986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HomeBlogAdmin/layout.html.twig", "HomeBlogAdminBundle:Article:add.html.twig", 1);
        $this->blocks = array(
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HomeBlogAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d941f94f9654dd317be2414cdc1defd8bc8676b2fd6b999d909bd9c0b2665229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d941f94f9654dd317be2414cdc1defd8bc8676b2fd6b999d909bd9c0b2665229->enter($__internal_d941f94f9654dd317be2414cdc1defd8bc8676b2fd6b999d909bd9c0b2665229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Article:add.html.twig"));

        $__internal_5b71c67afe44f2168fd5ae99b3f48cd45a84761776d79c1a9fcc1da1c5bef47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b71c67afe44f2168fd5ae99b3f48cd45a84761776d79c1a9fcc1da1c5bef47f->enter($__internal_5b71c67afe44f2168fd5ae99b3f48cd45a84761776d79c1a9fcc1da1c5bef47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d941f94f9654dd317be2414cdc1defd8bc8676b2fd6b999d909bd9c0b2665229->leave($__internal_d941f94f9654dd317be2414cdc1defd8bc8676b2fd6b999d909bd9c0b2665229_prof);

        
        $__internal_5b71c67afe44f2168fd5ae99b3f48cd45a84761776d79c1a9fcc1da1c5bef47f->leave($__internal_5b71c67afe44f2168fd5ae99b3f48cd45a84761776d79c1a9fcc1da1c5bef47f_prof);

    }

    // line 3
    public function block_edit($context, array $blocks = array())
    {
        $__internal_25b7cfb439664a74dce23767cc36c216ff2d5e7df56c1bbb6c7eeeacb242a42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b7cfb439664a74dce23767cc36c216ff2d5e7df56c1bbb6c7eeeacb242a42c->enter($__internal_25b7cfb439664a74dce23767cc36c216ff2d5e7df56c1bbb6c7eeeacb242a42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        $__internal_3a2f4d5bbe45f3889217aca533d3180f52a0151ef0475942ab39267aa4a79c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2f4d5bbe45f3889217aca533d3180f52a0151ef0475942ab39267aa4a79c06->enter($__internal_3a2f4d5bbe45f3889217aca533d3180f52a0151ef0475942ab39267aa4a79c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        // line 4
        echo "    <h5 class=\"mb-20\">Добавление статьи</h5>
    <form method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_blog_admin_article_add");
        echo "\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" />
    </form>
";
        
        $__internal_3a2f4d5bbe45f3889217aca533d3180f52a0151ef0475942ab39267aa4a79c06->leave($__internal_3a2f4d5bbe45f3889217aca533d3180f52a0151ef0475942ab39267aa4a79c06_prof);

        
        $__internal_25b7cfb439664a74dce23767cc36c216ff2d5e7df56c1bbb6c7eeeacb242a42c->leave($__internal_25b7cfb439664a74dce23767cc36c216ff2d5e7df56c1bbb6c7eeeacb242a42c_prof);

    }

    public function getTemplateName()
    {
        return "HomeBlogAdminBundle:Article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@HomeBlogAdmin/layout.html.twig\" %}

{% block edit %}
    <h5 class=\"mb-20\">Добавление статьи</h5>
    <form method=\"post\" action=\"{{ path('home_blog_admin_article_add') }}\">
        {{ form_widget(form) }}
        <input type=\"submit\" />
    </form>
{% endblock %}", "HomeBlogAdminBundle:Article:add.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\AdminBundle/Resources/views/Article/add.html.twig");
    }
}
