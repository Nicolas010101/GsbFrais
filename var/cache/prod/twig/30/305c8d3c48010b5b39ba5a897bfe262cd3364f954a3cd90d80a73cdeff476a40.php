<?php

/* profil/profil.html.twig */
class __TwigTemplate_11e4371162d2537496008f9ca78404a18b082babdf7801d1e593bb13f2d41e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profil/profil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylsheet' => array($this, 'block_stylsheet'),
            'header' => array($this, 'block_header'),
            'headerRight' => array($this, 'block_headerRight'),
            'main' => array($this, 'block_main'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
            'affichage' => array($this, 'block_affichage'),
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
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "
    ";
        // line 150
        $this->displayBlock('footer', $context, $blocks);
        // line 153
        echo "
    ";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 157
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
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleProfil.css"), "html", null, true);
        echo "\">
        <style>
            /*nav {
                background-color: red;
                // TEST MERGE INTO CURRENT DEPUIS MASTER
            }*/

        </style>
    ";
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarTogglerDemo03\" aria-controls=\"navbarTogglerDemo03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_accueil");
        echo "\">GsbFrais</a>

            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo03\">
                <ul class=\"navbar-nav mr-auto mt-2 mt-lg-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Accueil<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <!--<li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                    </li>-->
                </ul>

                <div class=\"my-0 my-lg-0\" id=\"Np\">
                    ";
        // line 36
        $this->displayBlock('headerRight', $context, $blocks);
        // line 40
        echo "                </div>

            </div>
        </nav>
    ";
    }

    // line 36
    public function block_headerRight($context, array $blocks = array())
    {
        // line 37
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_user");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo " <i class=\"far fa-user\"></i></a>
                        ";
        // line 39
        echo "                    ";
    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
        // line 46
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-3\">
                    ";
        // line 49
        $this->displayBlock('menu', $context, $blocks);
        // line 92
        echo "                </div>



                <div class=\"col-sm-9\">
                    ";
        // line 97
        $this->displayBlock('contenu', $context, $blocks);
        // line 141
        echo "                </div>
                <div class=\"col-sm-4 col-md-3\">
                    ";
        // line 143
        $this->displayBlock('affichage', $context, $blocks);
        // line 145
        echo "                </div>
            </div>
        </div>
    ";
    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        // line 50
        echo "                        <div class=\"container-fluid\">
                            <div class ='row'>
                                <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                    <div id=\"navLateral\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\" >
                                                <a class=\"nav-link active\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                            </li>
                                        </ul>
                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\">Historique <i class=\"fas fa-history\"></i></a>
                                            </li>
                                        </ul>

                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                            </li>

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_accueil_deco");
        echo "\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    ";
    }

    // line 97
    public function block_contenu($context, array $blocks = array())
    {
        // line 98
        echo "
                        ";
        // line 99
        if ((($context["modifCpt"] ?? null) == true)) {
            // line 100
            echo "                            <div class=\"jumbotron jumbotron-fluid\" style=\"padding: 3rem 3rem; margin-top: 5rem\">
                                <div class=\"container contAlign\">

                                    <table class=\"table\">
                                        <tr class=\"table-danger\" >
                                            <td ><h4> Compte modifié avec succès </h4></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                        ";
        } elseif ((        // line 112
($context["modifMdp"] ?? null) == true)) {
            // line 113
            echo "                            <div class=\"jumbotron jumbotron-fluid\" style=\"padding: 3rem 3rem; margin-top: 5rem\">
                                <div class=\"container contAlign\">

                                    <table class=\"table\">
                                        <tr class=\"table-danger\" >
                                            <td ><h4> Mot de passe modifié avec succès </h4></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                        ";
        } else {
            // line 126
            echo "
                            <div class=\"jumbotron jumbotron-fluid\" style=\"padding: 10rem 3rem\">
                                <div class=\"container contAlign\">
                                    <h1> Accueil </h1>

                                    <h4> Bienvenue sur votre espace : </h4>

                                    <h6> Gestion des frais de visites </h6>
                                    <!--ee-->
                                </div>
                            </div>

                        ";
        }
        // line 139
        echo "
                    ";
    }

    // line 143
    public function block_affichage($context, array $blocks = array())
    {
        // line 144
        echo "                    ";
    }

    // line 150
    public function block_footer($context, array $blocks = array())
    {
        // line 151
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        // line 155
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 155,  318 => 154,  311 => 151,  308 => 150,  304 => 144,  301 => 143,  296 => 139,  281 => 126,  266 => 113,  264 => 112,  250 => 100,  248 => 99,  245 => 98,  242 => 97,  228 => 82,  221 => 78,  209 => 69,  203 => 66,  197 => 63,  187 => 56,  179 => 50,  176 => 49,  169 => 145,  167 => 143,  163 => 141,  161 => 97,  154 => 92,  152 => 49,  147 => 46,  144 => 45,  140 => 39,  131 => 37,  128 => 36,  120 => 40,  118 => 36,  104 => 25,  96 => 20,  90 => 16,  87 => 15,  74 => 5,  69 => 4,  66 => 3,  61 => 157,  59 => 154,  56 => 153,  54 => 150,  51 => 149,  48 => 45,  46 => 15,  43 => 14,  40 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profil/profil.html.twig", "/var/www/html/GsbFrais/app/Resources/views/profil/profil.html.twig");
    }
}
