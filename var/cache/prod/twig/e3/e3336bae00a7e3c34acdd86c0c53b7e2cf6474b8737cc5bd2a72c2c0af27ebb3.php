<?php

/* base.html.twig */
class __TwigTemplate_5e07e1787f96caba1e2b222af1001353614630255f028ad8175a20bc33286edb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'headerRight' => array($this, 'block_headerRight'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("iconGsb.png"), "html", null, true);
        echo "\" />

    <title>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "

</body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <!-- Bootstrap CSS -->


        <!--<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-grid.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-reboot.css"), "html", null, true);
        echo "\">

        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\" integrity=\"sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ\" crossorigin=\"anonymous\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleBase.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
        echo " GsbFrais ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "
    ";
        // line 59
        $this->displayBlock('main', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo03\" aria-controls=\"navbarTogglerDemo03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_accueil");
        echo "\">GsbFrais</a>

        <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo03\">
            <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_accueil");
        echo "\">Accueil<span class=\"sr-only\">(current)</span></a>
                </li>
                <!--<li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                </li>-->
            </ul>

            <div class=\"my-0 my-lg-0\">
                ";
        // line 50
        $this->displayBlock('headerRight', $context, $blocks);
        // line 53
        echo "            </div>

             </div>
    </nav>
    ";
    }

    // line 50
    public function block_headerRight($context, array $blocks = array())
    {
        // line 51
        echo "                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_connexion");
        echo "\"> Connexion </a>
                ";
    }

    // line 59
    public function block_main($context, array $blocks = array())
    {
        // line 60
        echo "    ";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <span class=\"text-muted\"> Site Gsb footer </span>
            </div>
        </footer>
        ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script src=\"\" ></script>-->


    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>

";
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
        return array (  211 => 80,  207 => 79,  197 => 71,  194 => 70,  185 => 63,  182 => 62,  178 => 60,  175 => 59,  168 => 51,  165 => 50,  157 => 53,  155 => 50,  141 => 39,  133 => 34,  127 => 30,  124 => 29,  119 => 83,  117 => 70,  114 => 69,  112 => 62,  109 => 61,  107 => 59,  104 => 58,  101 => 29,  98 => 28,  92 => 25,  86 => 20,  79 => 16,  75 => 15,  71 => 14,  64 => 9,  61 => 8,  54 => 85,  52 => 28,  46 => 25,  41 => 23,  38 => 22,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/GsbFrais/app/Resources/views/base.html.twig");
    }
}
