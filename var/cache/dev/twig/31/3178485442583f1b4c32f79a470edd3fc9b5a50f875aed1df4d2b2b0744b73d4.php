<?php

/* HomeBlogAdminBundle:Article:list.html.twig */
class __TwigTemplate_fbeced6e4799678f38a8a17dbd3ec48a0e0a9a73867dacf0f6bce1c1233787b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@HomeBlogAdmin/layout.html.twig", "HomeBlogAdminBundle:Article:list.html.twig", 1);
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
        $__internal_cd485fba8e653d9c3acae8678e3f78eda021a4b4817cdab2bc59cbde984b50f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd485fba8e653d9c3acae8678e3f78eda021a4b4817cdab2bc59cbde984b50f9->enter($__internal_cd485fba8e653d9c3acae8678e3f78eda021a4b4817cdab2bc59cbde984b50f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Article:list.html.twig"));

        $__internal_da02b016d25aedaf3d7efb7379f9cbff350fc38debcff5877462265dfdbf85a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da02b016d25aedaf3d7efb7379f9cbff350fc38debcff5877462265dfdbf85a9->enter($__internal_da02b016d25aedaf3d7efb7379f9cbff350fc38debcff5877462265dfdbf85a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBlogAdminBundle:Article:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd485fba8e653d9c3acae8678e3f78eda021a4b4817cdab2bc59cbde984b50f9->leave($__internal_cd485fba8e653d9c3acae8678e3f78eda021a4b4817cdab2bc59cbde984b50f9_prof);

        
        $__internal_da02b016d25aedaf3d7efb7379f9cbff350fc38debcff5877462265dfdbf85a9->leave($__internal_da02b016d25aedaf3d7efb7379f9cbff350fc38debcff5877462265dfdbf85a9_prof);

    }

    // line 3
    public function block_edit($context, array $blocks = array())
    {
        $__internal_838ceb8795e7b36e0189e3b40b9b404a27b8c9264c1cace97b659fd7cd633233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838ceb8795e7b36e0189e3b40b9b404a27b8c9264c1cace97b659fd7cd633233->enter($__internal_838ceb8795e7b36e0189e3b40b9b404a27b8c9264c1cace97b659fd7cd633233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        $__internal_bbecf3f6a4a248af8ae227e5587367e4bca5846fff768d9dddfce2683e62c9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbecf3f6a4a248af8ae227e5587367e4bca5846fff768d9dddfce2683e62c9e1->enter($__internal_bbecf3f6a4a248af8ae227e5587367e4bca5846fff768d9dddfce2683e62c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        // line 4
        echo "    <h3>Список статей</h3>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_blog_admin_article_add");
        echo "\">Добавить статью</a>
    <table border=\"1\">
        <tr>
            <td style=\"color: #000;\">Название</td>
            <td style=\"color: #000\">Описание</td>
            <td style=\"color: #000\">Дата публикации</td>
        </tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articleList"] ?? $this->getContext($context, "articleList")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getName", array(), "method"), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getShortDescription", array(), "method"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_blog_admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Редактировать</a></br>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>
";
        
        $__internal_bbecf3f6a4a248af8ae227e5587367e4bca5846fff768d9dddfce2683e62c9e1->leave($__internal_bbecf3f6a4a248af8ae227e5587367e4bca5846fff768d9dddfce2683e62c9e1_prof);

        
        $__internal_838ceb8795e7b36e0189e3b40b9b404a27b8c9264c1cace97b659fd7cd633233->leave($__internal_838ceb8795e7b36e0189e3b40b9b404a27b8c9264c1cace97b659fd7cd633233_prof);

    }

    public function getTemplateName()
    {
        return "HomeBlogAdminBundle:Article:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  78 => 17,  73 => 15,  69 => 14,  66 => 13,  62 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3>Список статей</h3>
    <a href=\"{{ path(\"home_blog_admin_article_add\") }}\">Добавить статью</a>
    <table border=\"1\">
        <tr>
            <td style=\"color: #000;\">Название</td>
            <td style=\"color: #000\">Описание</td>
            <td style=\"color: #000\">Дата публикации</td>
        </tr>
        {% for article in articleList %}
            <tr>
                <td>{{ article.getName() }}</td>
                <td>{{ article.getShortDescription() }}</td>
                <td>
                    <a href=\"{{ path(\"home_blog_admin_article_edit\", {id:article.id}) }}\">Редактировать</a></br>
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}", "HomeBlogAdminBundle:Article:list.html.twig", "D:\\WEB\\wamp64\\www\\HomeBlog\\src\\HomeBlog\\AdminBundle/Resources/views/Article/list.html.twig");
    }
}
