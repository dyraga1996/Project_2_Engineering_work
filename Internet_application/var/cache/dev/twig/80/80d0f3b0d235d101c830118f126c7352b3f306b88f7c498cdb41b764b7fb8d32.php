<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_afa2c345972670ba6a9c75587106f09cc76b3f2d7fc45a1f24902f7afe96dbd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = ["dark" => ["info" => "#39A0ED", "warning" => "#F0AD4E", "danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"], "light" => ["info" => "#39A0ED", "warning" => "#F0AD4E", "danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"]];
        // line 47
        echo "
";
        // line 48
        $context["colors"] = $this->getAttribute(($context["color_schemes"] ?? $this->getContext($context, "color_schemes")), ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")), [], "array");
        // line 49
        echo "
";
        // line 56
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 64
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 75
        echo "a        { color: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "link", []);
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 86
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "link", []);
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 90
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 99
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 117
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 121
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "success", []);
        echo ";
    color: ";
        // line 122
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
div.flash-error {
    background: ";
        // line 125
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
    color: ";
        // line 126
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 135
        echo ".label:not([class*=label-]) {
    background: ";
        // line 136
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", []);
        echo ";
}
.label {
    color: ";
        // line 139
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 148
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "success", []);
        echo " !important;
}
.label-danger {
    ";
        // line 152
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 158
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    padding: 4px 8px;
}

";
        // line 163
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 172
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 214
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 230
        echo "span.badge {
    background-color: ";
        // line 231
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
}

";
        // line 236
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 253
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 254
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
";
        } elseif (("light" ==         // line 255
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 256
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
            echo ";
";
        }
        // line 258
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 261
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 289
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    border-color: transparent;
    color: ";
        // line 291
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: ";
        // line 298
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "info", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 300
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
.btn-warning,
.btn-warning:hover,
.btn-warning:active,
.btn-warning:focus,
.btn-warning:active:hover {
    background-color: ";
        // line 307
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "warning", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 309
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 316
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 318
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 325
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "success", []);
        echo ";
    border-color: transparent;
    color: ";
        // line 327
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}

";
        // line 331
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 337
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-warning,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 367
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 372
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
        echo ";
    border-radius: 0;
";
        // line 374
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 375
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 377
        echo "    color: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 382
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 383
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", []);
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 385
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 386
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", []);
            echo ";
";
        }
        // line 388
        echo "}

.has-error .error-block {
    color: ";
        // line 391
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 407
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text_muted", []);
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 417
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 418
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 419
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
";
        } elseif (("light" ==         // line 420
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 421
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 422
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
            echo ";
";
        }
        // line 424
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 426
        if ((((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context))) ? (_twig_default_filter(($context["kernel_debug"] ?? $this->getContext($context, "kernel_debug")), false)) : (false))) {
            // line 427
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 430
        echo "    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

";
        // line 446
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 452
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 457
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 458
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 459
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 460
            echo "    border-top-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
            echo ";
";
        }
        // line 462
        echo "}
.field-group .field-divider hr {
";
        // line 464
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 465
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 466
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 467
            echo "    border-top-color: #EEE;
";
        }
        // line 469
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 475
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 476
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
    color: ";
            // line 477
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", []);
            echo ";
";
        } elseif (("light" ==         // line 478
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 479
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 480
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", []);
            echo ";
";
        }
        // line 482
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 486
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 487
            echo "    color: #555;
";
        } elseif (("light" ==         // line 488
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 489
            echo "    color: #777;
";
        }
        // line 491
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 498
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 499
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 500
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 501
            echo "    border: 1px solid #EEE;
";
        }
        // line 503
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 506
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 507
            echo "    color: #555;
";
        } elseif (("light" ==         // line 508
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 509
            echo "    color: #777;
";
        }
        // line 511
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 514
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 515
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 517
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 518
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 520
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", []);
            echo ";
";
        }
        // line 522
        echo "    padding: 11px 10px 9px;
}
";
        // line 524
        if (("light" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 525
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 529
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 539
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 543
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 546
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 554
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 561
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 565
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 568
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 571
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 577
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", []);
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 590
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 591
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    box-shadow: 0 0 3px ";
        // line 592
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 605
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 615
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 616
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    box-shadow: 0 0 3px ";
        // line 617
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 639
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 647
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
        echo ";
    border-top: 1px solid ";
        // line 648
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    margin-top: 1.5em;
}

";
        // line 654
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 662
        echo "
";
        // line 665
        echo ".content-wrapper {
    background: ";
        // line 666
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "page_background", []);
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 674
        echo ".main-header {
    background: ";
        // line 675
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 679
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 681
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 706
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 725
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 782
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 798
        echo ".main-sidebar,
.wrapper {
";
        // line 800
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 801
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 802
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 803
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
";
        }
        // line 805
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 811
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 812
            echo "    color: #777;
";
        } elseif (("light" ==         // line 813
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 814
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", []);
            echo ";
";
        }
        // line 816
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 821
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 822
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 823
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 824
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
            echo ";
";
        }
        // line 826
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 843
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 844
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 846
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 847
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", []);
            echo ";
";
        }
        // line 849
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 855
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 856
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 857
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 858
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
            echo ";
";
        }
        // line 860
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 869
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 870
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 873
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 874
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 877
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 886
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 903
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 904
            echo "    background: #333;
";
        } elseif (("light" ==         // line 905
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 906
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
";
        }
        // line 908
        echo "}

";
        // line 911
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 912
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 913
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 914
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 915
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 917
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 927
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 932
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 933
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", []);
            echo ";
";
        } elseif (("light" ==         // line 934
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 935
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 937
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text_muted", []);
            echo ";
";
        }
        // line 939
        echo "    margin: 10px 0 5px;
}

";
        // line 945
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 981
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 994
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
";
        // line 995
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 996
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
            echo ";
";
        } elseif (("light" ==         // line 997
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 998
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
            echo ";
";
        }
        // line 1000
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 1004
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_row_border", []);
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1045
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1058
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1065
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1066
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text_muted", []);
            echo ";
";
        } elseif (("light" ==         // line 1067
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1068
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
            echo ";
";
        }
        // line 1070
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1072
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    border-color: ";
        // line 1073
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    border-radius: 0;
    color: ";
        // line 1075
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1078
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    color: ";
        // line 1079
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1091
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1099
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1101
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
    font-size: 16px;
}

";
        // line 1108
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1130
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1152
        echo "body.show .form-control {
";
        // line 1153
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1154
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
            echo ";
";
        } elseif (("light" ==         // line 1155
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1156
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
            echo ";
";
        }
        // line 1158
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1172
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1177
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    border: 1px solid ";
        // line 1178
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
        echo ";
    box-shadow: 0 0 3px ";
        // line 1179
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1184
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", []);
        echo ";
    color: ";
        // line 1185
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1201
        echo "
";
        // line 1205
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1229
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1276
        echo "    body.list table {
        background: ";
        // line 1277
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
        echo ";
        border: 1px solid ";
        // line 1278
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_border", []);
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1284
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_header", []);
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1288
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", []);
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1293
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", []);
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1299
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1304
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1305
            echo "        background: ";
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
        color: ";
            // line 1306
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
            echo ";
";
        }
        // line 1308
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1311
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1312
            echo "        color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", []);
            echo ";
";
        } elseif (("light" ==         // line 1313
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1314
            echo "        color: ";
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1316
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1324
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1327
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    }
    ";
        // line 1330
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1331
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1332
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
        border-top: 1px solid ";
            // line 1333
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1335
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1337
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", []);
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1346
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_row_border", []);
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1358
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
        echo ";
        border-color: ";
        // line 1359
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_row_border", []);
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1362
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", []);
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1402
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1887 => 1402,  1846 => 1362,  1840 => 1359,  1836 => 1358,  1821 => 1346,  1809 => 1337,  1805 => 1335,  1800 => 1333,  1795 => 1332,  1793 => 1331,  1790 => 1330,  1785 => 1327,  1779 => 1324,  1769 => 1316,  1763 => 1314,  1761 => 1313,  1756 => 1312,  1754 => 1311,  1749 => 1308,  1744 => 1306,  1739 => 1305,  1737 => 1304,  1729 => 1299,  1720 => 1293,  1712 => 1288,  1705 => 1284,  1696 => 1278,  1692 => 1277,  1689 => 1276,  1641 => 1229,  1616 => 1205,  1613 => 1201,  1597 => 1185,  1593 => 1184,  1585 => 1179,  1581 => 1178,  1577 => 1177,  1570 => 1172,  1557 => 1158,  1551 => 1156,  1549 => 1155,  1544 => 1154,  1542 => 1153,  1539 => 1152,  1518 => 1130,  1497 => 1108,  1490 => 1101,  1486 => 1099,  1479 => 1091,  1467 => 1079,  1463 => 1078,  1457 => 1075,  1452 => 1073,  1448 => 1072,  1444 => 1070,  1438 => 1068,  1436 => 1067,  1431 => 1066,  1429 => 1065,  1420 => 1058,  1407 => 1045,  1365 => 1004,  1359 => 1000,  1353 => 998,  1351 => 997,  1346 => 996,  1344 => 995,  1340 => 994,  1325 => 981,  1289 => 945,  1284 => 939,  1279 => 937,  1275 => 935,  1273 => 934,  1268 => 933,  1266 => 932,  1259 => 927,  1250 => 917,  1246 => 915,  1244 => 914,  1241 => 913,  1239 => 912,  1236 => 911,  1232 => 908,  1226 => 906,  1224 => 905,  1221 => 904,  1219 => 903,  1200 => 886,  1190 => 877,  1185 => 874,  1183 => 873,  1176 => 870,  1174 => 869,  1163 => 860,  1157 => 858,  1155 => 857,  1152 => 856,  1150 => 855,  1142 => 849,  1136 => 847,  1134 => 846,  1130 => 844,  1128 => 843,  1109 => 826,  1103 => 824,  1101 => 823,  1098 => 822,  1096 => 821,  1089 => 816,  1083 => 814,  1081 => 813,  1078 => 812,  1076 => 811,  1068 => 805,  1062 => 803,  1060 => 802,  1057 => 801,  1055 => 800,  1051 => 798,  1035 => 782,  977 => 725,  955 => 706,  928 => 681,  924 => 679,  917 => 675,  914 => 674,  905 => 666,  902 => 665,  899 => 662,  892 => 654,  885 => 648,  881 => 647,  871 => 639,  848 => 617,  844 => 616,  841 => 615,  831 => 605,  816 => 592,  812 => 591,  809 => 590,  795 => 577,  786 => 571,  780 => 568,  774 => 565,  767 => 561,  757 => 554,  746 => 546,  740 => 543,  734 => 539,  725 => 529,  719 => 525,  717 => 524,  713 => 522,  708 => 520,  702 => 518,  700 => 517,  696 => 515,  694 => 514,  689 => 511,  685 => 509,  683 => 508,  680 => 507,  678 => 506,  673 => 503,  669 => 501,  667 => 500,  664 => 499,  662 => 498,  653 => 491,  649 => 489,  647 => 488,  644 => 487,  642 => 486,  636 => 482,  631 => 480,  628 => 479,  626 => 478,  622 => 477,  617 => 476,  615 => 475,  607 => 469,  603 => 467,  601 => 466,  598 => 465,  596 => 464,  592 => 462,  586 => 460,  584 => 459,  581 => 458,  579 => 457,  572 => 452,  566 => 446,  550 => 430,  545 => 427,  543 => 426,  539 => 424,  534 => 422,  529 => 421,  527 => 420,  523 => 419,  518 => 418,  516 => 417,  503 => 407,  484 => 391,  479 => 388,  473 => 386,  471 => 385,  465 => 383,  463 => 382,  454 => 377,  450 => 375,  448 => 374,  443 => 372,  436 => 367,  405 => 337,  397 => 331,  391 => 327,  386 => 325,  376 => 318,  371 => 316,  361 => 309,  356 => 307,  346 => 300,  341 => 298,  331 => 291,  326 => 289,  295 => 261,  290 => 258,  284 => 256,  282 => 255,  277 => 254,  275 => 253,  256 => 236,  250 => 231,  247 => 230,  230 => 214,  186 => 172,  179 => 163,  172 => 158,  162 => 152,  155 => 148,  144 => 139,  138 => 136,  135 => 135,  126 => 126,  122 => 125,  116 => 122,  112 => 121,  106 => 117,  88 => 99,  78 => 90,  71 => 86,  56 => 75,  45 => 64,  38 => 56,  35 => 49,  33 => 48,  30 => 47,  28 => 5,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#  ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== #}

{% set color_schemes = {
    'dark': {
        info: '#39A0ED',
        warning: '#F0AD4E',
        danger: '#D42124',
        success: '#006B2E',
        text: '#222222',
        text_muted: '#737373',
        link: '#205081',
        black: '#111111',
        white: '#FFFFFF',
        gray_darker: '#252525',
        gray_dark: '#444',
        gray: '#AAA',
        gray_light: '#CCC',
        gray_lighter: '#F5F5F5',
        page_background: '#F5F5F5',
        table_header: '#EEE',
        table_border: '#CCC',
        table_row_border: '#DDD',
    },
    'light': {
        info: '#39A0ED',
        warning: '#F0AD4E',
        danger: '#D42124',
        success: '#006B2E',
        text: '#444444',
        text_muted: '#737373',
        link: '#205081',
        black: '#333333',
        white: '#FFFFFF',
        gray_darker: '#444',
        gray_dark: '#AAA',
        gray: '#CCC',
        gray_light: '#F5F5F5',
        gray_lighter: '#FAFAFA',
        page_background: '#FFFFFF',
        table_header: '#FAFAFA',
        table_border: '#FFFFFF',
        table_row_border: '#E5E5E5',
    }
} %}

{% set colors = color_schemes[color_scheme] %}

{% autoescape false %}
{# -------------------------------------------------------------------------
   RESET STYLES
   ------------------------------------------------------------------------- #}
{# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied
   globally by the AdminLTE template styles #}
.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

{# -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- #}
body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

{# Links
   ------------------------------------------------------------------------- #}
a        { color: {{ colors.link }}; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: {{ colors.link }};
}
a.text-danger,
a.text-danger:focus {
    color: {{ colors.danger }};
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

{# Lists
   ------------------------------------------------------------------------- #}
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

{# Flash messages
   ------------------------------------------------------------------------- #}
div.flash {
    padding: .5em;
}
div.flash-success {
    background: {{ colors.success }};
    color: {{ colors.white }};
}
div.flash-error {
    background: {{ colors.danger }};
    color: {{ colors.white }};
}
div.flash-error strong {
    padding-right: .5em;
}

{# Labels
   ------------------------------------------------------------------------- #}
{# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}
.label:not([class*=label-]) {
    background: {{ colors.gray_darker }};
}
.label {
    color: {{ colors.white }};
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.success }} !important;
}
.label-danger {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.danger }} !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: {{ colors.gray_light }};
    padding: 4px 8px;
}

{# this makes boolean labels to be of the same width for most languages #}
.boolean .label,
.toggle .label {
    min-width: 33px;
}

{# Switches / toggles
   ------------------------------------------------------------------------- #}
{# needed to neutralize the default .toggle styles applied by Bootstrap Toggle
   which collide with the .toggle class applied to <th> too #}
.toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: {{ colors.gray_lighter }};
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

{# Badges
   ------------------------------------------------------------------------- #}
span.badge {
    background-color: {{ brand_color }};
}

{# Buttons
   ------------------------------------------------------------------------- #}
.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
{% if 'dark' == color_scheme %}
    background: {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray }};
{% endif %}
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: {{ colors.text }};
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: {{ brand_color }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: {{ colors.info }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-warning,
.btn-warning:hover,
.btn-warning:active,
.btn-warning:focus,
.btn-warning:active:hover {
    background-color: {{ colors.warning }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: {{ colors.danger }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: {{ colors.success }};
    border-color: transparent;
    color: {{ colors.white }};
}

{# .bnt-secondary is for 'buttons' displayed as text links #}
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: {{ brand_color }};
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-warning,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

{# Forms
   ------------------------------------------------------------------------- #}
.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
{% if 'dark' == color_scheme %}
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% endif %}
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
{% if 'dark' == color_scheme %}
    border-color: {{ colors.gray_dark }};
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% elseif 'light' == color_scheme %}
    border-color: {{ colors.gray_darker }};
{% endif %}
}

.has-error .error-block {
    color: {{ colors.danger }};
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: {{ colors.text_muted }};
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
{% if 'dark' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
    box-shadow: 0 -1px 4px {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
    box-shadow: 0 -1px 4px {{ colors.gray }};
{% endif %}
    height: 52px;
    padding-top: 10px;
{% if kernel_debug|default(false) %}
    height: 85px;
    padding-bottom: 45px;
{% endif %}
    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

{# Field: collection
   ------------------------------------------------------------------------- #}
.field-collection .collection-empty {
    margin: .5em 0;
}

{# Field: special Form Fields (dividers, groups, sections)
   ------------------------------------------------------------------------- #}
.field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: {{ colors.gray_lighter }};
{% endif %}
}
.field-group .field-divider hr {
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: #EEE;
{% endif %}
}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid {{ colors.gray_light }};
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
{% if 'dark' == color_scheme %}
    border: 1px solid #DDD;
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
{% endif %}
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-group .box-header.with-border {
{% if 'dark' == color_scheme %}
    background: #F0F0F0;
    border-bottom-color: #DDD;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
    border-bottom-color: #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    padding: 11px 10px 9px;
}
{% if 'light' == color_scheme %}
.field-group .box-header .box-title {
    color: #777;
}
{% endif %}
.field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

{# Select2 widget
   ------------------------------------------------------------------------- #}
{# these styles must be applied after loading the default select2 styles #}
.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: {{ colors.text }};
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: {{ colors.gray_light }};
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: {{ brand_color }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: {{ colors.text }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: {{ colors.danger }};
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid {{ colors.gray_dark }};
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

{# VichUploaderBundle files and images
   ------------------------------------------------------------------------- #}
.easyadmin-vich-image img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
{# the checkbox to delete the image/file #}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

{# Thumbnails and image lightbox
   ------------------------------------------------------------------------- #}
.easyadmin-thumbnail img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

{# Modal windows
   ------------------------------------------------------------------------- #}
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: {{ colors.gray_lighter }};
    border-top: 1px solid {{ colors.gray_light }};
    margin-top: 1.5em;
}

{# Utils
   ------------------------------------------------------------------------- #}
.newrow, .new-row {
    clear: both;
    display: block;
}

{# -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- #}

{# Wrapper
   ------------------------------------------------------------------------- #}
.content-wrapper {
    background: {{ colors.page_background }};
}
.fixed .content-wrapper {
    padding-top: 50px;
}

{# Header
   ------------------------------------------------------------------------- #}
.main-header {
    background: {{ brand_color }};
    position: relative;
}
.main-header .logo {
    color: {{ colors.white }};
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; {# needed to override AdminLTE styles #}
    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: {{ brand_color }};
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: {{ colors.white }};
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

{# Main body
   ------------------------------------------------------------------------- #}
#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

{# Sidebar
   ------------------------------------------------------------------------- #}
.main-sidebar,
.wrapper {
{% if 'dark' == color_scheme %}
    background-color: #333;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
{% endif %}
}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    color: #777;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_dark }};
{% endif %}
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #333;
    color: #CCC;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_darker }};
{% endif %}
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
{% if 'dark' == color_scheme %}
    color: {{ colors.white }};
    background: #4D4D4D;
    border-left-color: #BBB;
{% elseif 'light' == color_scheme %}
    background: #DCDCDC;
    border-left-color: #808080;
{% endif %}
}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

{# when the sidebar is collapsed #}
.sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
{% if 'dark' == color_scheme %}
    background: #333;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
{% endif %}
}

{# when collapsed, menu dividers are displayed as a straight line #}
.sidebar-mini.sidebar-collapse .sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid #777;
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #BBB;
{% endif %}
    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

{# -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- #}
body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
{% if 'dark' == color_scheme %}
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: {{ colors.text_muted }};
{% endif %}
    margin: 10px 0 5px;
}

{# -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- #}

body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

{# Responsive tables
   ------------------------------------------------------------------------- #}
body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: {{ colors.white }};
{% if 'dark' == color_scheme %}
    border: 1px solid {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    border: 1px solid {{ colors.gray }};
{% endif %}
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid {{ colors.table_row_border }};
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

{# Search results
   ------------------------------------------------------------------------- #}
body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

{# Pagination
   ------------------------------------------------------------------------- #}
body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
{% if 'dark' == color_scheme %}
    color: {{ colors.text_muted }};
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray }};
{% endif %}
}
body.list .pagination > li > a {
    background: {{ colors.white }};
    border-color: {{ colors.gray_light }};
    border-radius: 0;
    color: {{ colors.text }};
}
body.list .pagination > li > a:hover {
    background: {{ brand_color }};
    color: {{ colors.white }};
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
{# this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) #}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

{# -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- #}
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: {{ colors.danger }};
    font-size: 16px;
}

{# -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- #}
body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- #}
body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- #}
body.show .form-control {
{% if 'dark' == color_scheme %}
    background: {{ colors.white }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_lighter }};
{% endif %}
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

{# -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- #}
body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: {{ colors.white }};
    border: 1px solid {{ colors.gray_lighter }};
    box-shadow: 0 0 3px {{ colors.gray_light }};
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: {{ colors.danger }};
    color: {{ colors.white }};
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

{# =========================================================================
   RESPONSIVE
   ========================================================================= #}

{# -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- #}
@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; {# neutralizes AdminLTE styles #}
        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    {# these table styles are needed to override the \"responsive tables\" styles #}
    body.list table {
        background: {{ colors.white }};
        border: 1px solid {{ colors.table_border }};
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: {{ colors.table_header }};
        padding: 0;
    }
    body.list table thead th i {
        color: {{ colors.gray }};
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: {{ colors.text }};
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: {{ colors.gray_light }};
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
{% if 'dark' == color_scheme %}
        background: {{ brand_color }};
        color: {{ colors.white }};
{% endif %}
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
{% if 'dark' == color_scheme %}
        color: {{ colors.white }};
{% elseif 'light' == color_scheme %}
        color: {{ brand_color }};
{% endif %}
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid {{ colors.gray_light }};
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset {{ brand_color }};
    }
    {# these styles are needed to fix some visual glitches when the sort field is the first column #}
    body.list .table thead tr th:first-child.sorted {
{% if 'dark' == color_scheme %}
        border-left: 1px solid {{ brand_color }};
        border-top: 1px solid {{ brand_color }};
{% endif %}
    }
    body.list .table tbody {
        border-bottom: 2px double {{ colors.gray_light }};
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid {{ colors.table_row_border }};
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: {{ colors.gray_lighter }};
        border-color: {{ colors.table_row_border }};
    }
    body.list .table tbody tr:hover td {
        background: {{ colors.gray_lighter }};
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    {# Field: checkbox
       ------------------------------------------------------------------------- #}
    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
{% endautoescape %}
", "@EasyAdmin/css/easyadmin.css.twig", "C:\\wamp64\\www\\rfid\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\css\\easyadmin.css.twig");
    }
}
