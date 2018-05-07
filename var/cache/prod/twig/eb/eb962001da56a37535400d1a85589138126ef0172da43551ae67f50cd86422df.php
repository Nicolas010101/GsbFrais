<?php

/* connexion/connexion.html.twig */
class __TwigTemplate_521b69e69267abf3e1a328fb90286cb016cd61bc26bd3f48f7d3eea0090359ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "connexion/connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylsheet' => array($this, 'block_stylsheet'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('stylsheet', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "
";
    }

    // line 3
    public function block_stylsheet($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("stylsheet", $context, $blocks);
        echo "
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleConnexion.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">

    ";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "        <div class=\"container1\">
            <div class=\"jumbotron jumbotron-fluid\">
                <div class=\"container2\">
                    <div class=\"container\">
                        <h1>Connexion</h1><br>
                        <div class=\"container-fluid\">
                            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "login", array()), 'row');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mdp", array()), 'row');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "choices", array()), 'row');
        echo "
                                </div>
                                <br>
                                <div id=\"divSave\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'row');
        echo "
                                </div>
                            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>


    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "connexion/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  154 => 48,  147 => 45,  144 => 44,  131 => 34,  126 => 32,  119 => 28,  113 => 25,  107 => 22,  102 => 20,  94 => 14,  91 => 13,  84 => 11,  81 => 10,  74 => 6,  70 => 5,  65 => 4,  62 => 3,  57 => 51,  55 => 48,  52 => 47,  50 => 44,  47 => 43,  44 => 13,  42 => 10,  39 => 9,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "connexion/connexion.html.twig", "/var/www/html/GsbFrais/app/Resources/views/connexion/connexion.html.twig");
    }
}
