<?php

/* profil/ficheMois.html.twig */
class __TwigTemplate_26bb9fee1ca93b50828f61f8294fb49ffd8acf1a3b64c3fdb6ba1697a8281e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profil/profil.html.twig", "profil/ficheMois.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylsheet' => array($this, 'block_stylsheet'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'menu' => array($this, 'block_menu'),
            'contenu' => array($this, 'block_contenu'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "profil/profil.html.twig";
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
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 229
        echo "
    ";
        // line 230
        $this->displayBlock('footer', $context, $blocks);
        // line 233
        echo "
    ";
        // line 234
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styleFicheMois.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-3\">
                    ";
        // line 15
        $this->displayBlock('menu', $context, $blocks);
        // line 58
        echo "                </div>



                <div class=\"col-sm-9\">
                    ";
        // line 63
        $this->displayBlock('contenu', $context, $blocks);
        // line 223
        echo "                </div>


            </div>
        </div>
    ";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "                        <div class=\"container-fluid\">
                            <div class ='row'>
                                <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                    <div id=\"navLateral\">
                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\" >
                                                <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fab fa-elementor\"></i></a>
                                            </li>
                                        </ul>
                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<i class=\"far fa-edit\"></i></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link active\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_afficher_mois");
        echo "\">Fiche du mois <i class=\"fas fa-angle-left\"></i><span class=\"sr-only\">(current)</span></a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_historique");
        echo "\">Historique<i class=\"fas fa-history\"></i></a>
                                            </li>
                                        </ul>

                                        <hr>

                                        <ul class=\"nav nav-pills flex-column\">

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_frais_edit_mdp");
        echo "\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                            </li>

                                            <li class=\"nav-item\">
                                                <a class=\"nav-link\" href=\"";
        // line 48
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

    // line 63
    public function block_contenu($context, array $blocks = array())
    {
        // line 64
        echo "                        ";
        // line 65
        echo "                        ";
        if (($context["dateModif"] ?? null)) {
            // line 66
            echo "                            <div class=\"container2\">
                                ";
            // line 68
            echo "                                <h5>Dernière modification le : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["dateModif"] ?? null), "d/m/Y"), "html", null, true);
            echo "</h5>
                            </div>
                        ";
        }
        // line 71
        echo "                        <div class=\"jumbotron jumbotron-fluid\">

                            <div class=\"container\">
                                <h1> Fiche des frais </h1>
                                <h3>";
        // line 75
        echo twig_escape_filter($this->env, ($context["dateDebut"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["dateFin"] ?? null), "html", null, true);
        echo "</h3>
                                <!--ee-->
                                <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
        echo "\"> Modifier la fiche de frais </a>
                            </div>
                        </div>

                        ";
        // line 82
        echo "                        <table class=\"table\">
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">";
        // line 84
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "état "), "html", null, true);
        echo "de la fiche : </th>
                                <td colspan=\"3\" class=\"table-info\" id=\"bordureRight\" >";
        // line 85
        echo twig_escape_filter($this->env, ($context["etat"] ?? null), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"table-info\" id=\"bordureLeft\" scope=\"row\">Total des frais : </th>
                                <td class=\"table-info\" id=\"bordureRight\" >";
        // line 89
        echo twig_escape_filter($this->env, ($context["totalFiche"] ?? null), "html", null, true);
        echo "€</td>
                                <th class=\"table-warning\" id=\"bordureLeft\" scope=\"row\">Frais validés : </th>
                                <td class=\"table-warning\" id=\"bordureRight\" >";
        // line 91
        echo twig_escape_filter($this->env, ($context["totalValide"] ?? null), "html", null, true);
        echo "€</td>
                            </tr>
                        </table>




                        <br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais forfaitisés</h3>
                        </div>
                        ";
        // line 104
        echo "                        ";
        if (($context["lesFraisForfaits"] ?? null)) {
            // line 105
            echo "
                            ";
            // line 107
            echo "                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                    <tr>
                                        ";
            // line 111
            echo "                                        <th scope=\"col\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "forfait"), "html", null, true);
            echo "</th>
                                        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 113
                echo "                                            <th scope=\"col\">";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "libelleFraisForfait", array(), "array")), "html", null, true);
                echo "</th>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 115
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        ";
            // line 122
            echo "                                        <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "prix unitaire"), "html", null, true);
            echo "</th>
                                        ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 124
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array"), "html", null, true);
                echo "€</td>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 126
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                    </tr>
                                    <tr>
                                        ";
            // line 131
            echo "                                        <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "quantité"), "html", null, true);
            echo "</th>
                                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 133
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array"), "html", null, true);
                echo "</td>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 135
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                    </tr>
                                    <tr>
                                        ";
            // line 140
            echo "                                        <th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "frais"), "html", null, true);
            echo "</th>
                                        ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisForfaits"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisForfaits"]) {
                // line 142
                echo "                                            <td>";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["leFraisForfaits"], "quantite", array(), "array") * $this->getAttribute($context["leFraisForfaits"], "montantFraisForfait", array(), "array")), "html", null, true);
                echo "€ </td>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 144
                echo "                                            La liste est Vide
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                                    </tr>
                                    <tr id=\"bordure\" style=\"background-color: #28a74599\">
                                        ";
            // line 149
            echo "                                        <th scope=\"row\" >";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
            echo "</th>
                                        <td id=\"placeTotal\" colspan=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["lesFraisForfaits"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["totalFraisForfait"] ?? null), "html", null, true);
            echo "€ </td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
            // line 155
            echo "                        ";
        } else {
            // line 156
            echo "                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais forfaitaire n'a été ajouté pour le moment</h4>
                                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
            // line 160
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
            echo "\"> Ajouter des frais </a>
                                    <!--ee-->
                                </div>
                            </div>
                        ";
        }
        // line 165
        echo "
                        <br><hr><br>

                        <div class=\"container\">
                            <h3>Récapitulatif des frais non forfaitisés</h3>
                        </div>
                        ";
        // line 172
        echo "                        ";
        if (($context["lesFraisHorsForfaits"] ?? null)) {
            // line 173
            echo "                            ";
            // line 174
            echo "                            <table class=\"table\">
                                <thead class=\"thead-light\">
                                <tr>
                                    ";
            // line 178
            echo "                                    <th scope=\"col\"></th>
                                    <th scope=\"col\">";
            // line 179
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "date"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\">";
            // line 180
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "description"), "html", null, true);
            echo "</th>
                                    <th scope=\"col\">";
            // line 181
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "montant"), "html", null, true);
            echo "</th>
                                </tr>
                                </thead>
                                <tbody>

                                    ";
            // line 187
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lesFraisHorsForfaits"] ?? null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["leFraisHorsForfaits"]) {
                // line 188
                echo "                                        <tr>
                                            <th scope=\"row\">";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                            <td>";
                // line 190
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "date", array(), "array"), "d/m/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "libelle", array(), "array"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["leFraisHorsForfaits"], "montant", array(), "array"), "html", null, true);
                echo "€</td>
                                        </tr>
                                    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 195
                echo "                                        La liste est Vide
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leFraisHorsForfaits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "
                                    <tr style=\"background-color: #28a74599\" id=\"bordure\">
                                        ";
            // line 200
            echo "                                        <th scope=\"row\" >";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "total"), "html", null, true);
            echo "</th>
                                        <td id=\"placeTotal\" colspan=\"3\">";
            // line 201
            echo twig_escape_filter($this->env, ($context["totalFraisNonForfait"] ?? null), "html", null, true);
            echo "€ </td>
                                    </tr>
                                    <tr style=\"background-color: #b1575099\" id=\"bordure\">
                                        ";
            // line 205
            echo "                                        <th scope=\"row\" colspan=\"2\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Nombre de justificatifs fournis"), "html", null, true);
            echo "</th>
                                        <td colspan=\"2\">";
            // line 206
            echo twig_escape_filter($this->env, ($context["nbJustificatif"] ?? null), "html", null, true);
            echo " </td>
                                    </tr>
                                </tbody>
                            </table>
                            ";
            // line 211
            echo "                        ";
        } else {
            // line 212
            echo "                            <div class=\"jumbotron jumbotron-fluid\">
                                <div class=\"container\">

                                    <h4>Aucun frais non forfaitisé n'a été ajouté pour le moment</h4>
                                    <a class=\"btn btn-outline-success my-2 my-sm-0\" href=\"";
            // line 216
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_profil_saisie_frais");
            echo "\"> Ajouter des frais </a>
                                    <!--ee-->
                                </div>
                            </div>
                        ";
        }
        // line 221
        echo "
                    ";
    }

    // line 230
    public function block_footer($context, array $blocks = array())
    {
        // line 231
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    // line 234
    public function block_javascripts($context, array $blocks = array())
    {
        // line 235
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profil/ficheMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 235,  568 => 234,  561 => 231,  558 => 230,  553 => 221,  545 => 216,  539 => 212,  536 => 211,  529 => 206,  524 => 205,  518 => 201,  513 => 200,  509 => 197,  502 => 195,  486 => 192,  482 => 191,  478 => 190,  474 => 189,  471 => 188,  452 => 187,  444 => 181,  440 => 180,  436 => 179,  433 => 178,  428 => 174,  426 => 173,  423 => 172,  415 => 165,  407 => 160,  401 => 156,  398 => 155,  389 => 150,  384 => 149,  380 => 146,  373 => 144,  365 => 142,  360 => 141,  355 => 140,  351 => 137,  344 => 135,  336 => 133,  331 => 132,  326 => 131,  322 => 128,  315 => 126,  307 => 124,  302 => 123,  297 => 122,  291 => 117,  284 => 115,  276 => 113,  271 => 112,  266 => 111,  261 => 107,  258 => 105,  255 => 104,  240 => 91,  235 => 89,  228 => 85,  224 => 84,  220 => 82,  213 => 77,  206 => 75,  200 => 71,  193 => 68,  190 => 66,  187 => 65,  185 => 64,  182 => 63,  168 => 48,  161 => 44,  149 => 35,  143 => 32,  137 => 29,  127 => 22,  119 => 16,  116 => 15,  107 => 223,  105 => 63,  98 => 58,  96 => 15,  91 => 12,  88 => 11,  81 => 9,  78 => 8,  72 => 5,  67 => 4,  64 => 3,  59 => 237,  57 => 234,  54 => 233,  52 => 230,  49 => 229,  46 => 11,  44 => 8,  41 => 7,  38 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profil/ficheMois.html.twig", "/var/www/html/GsbFrais/app/Resources/views/profil/ficheMois.html.twig");
    }
}
