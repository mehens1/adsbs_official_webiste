@extends('layouts.app')

@section('content')
<section class="section--map">
    <div class="section__container">
        <div class="map" data-lat="10.534424269378153" data-lng="7.451538700647006"></div>
        <div class="map__overlay">
            <div class="row">
                <div class="column column--half">
                    <p>&nbsp;</p>
                    <p>
                        <strong>Adamawa State<br />
                            Bureau of Statistics</strong>
                    </p>
                    <p>Government House Yola,<br />
                        Adamawa, Nigeria
                    </p>
                </div>
                <div class="column column--half">
                    <p>&nbsp;</p>
                    <p>
                        <strong>Adamawa State<br />
                            Bureau of Statistics</strong>
                    </p>
                    <p>Government House Yola,<br />
                        Adamawa, Nigeria
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column column--flex">
                    <p>&nbsp;</p>
                    <ul>
                        <li><a href="tel:+2348166691117">+234 816 669 1117</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="column column--flex">
                    <p>&nbsp;</p>
                    <ul>
                        <li><a href="mailto:info@adsbs.ng">info@adsbs.ng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--form">
    <div class="section__container">
        <noscript class="ninja-forms-noscript-message">
            Notice: JavaScript is required for this content.</noscript>
        <div id="nf-form-1-cont" class="nf-form-cont" aria-live="polite" aria-labelledby="nf-form-title-1"
            aria-describedby="nf-form-errors-1" role="form">
            <div class="nf-loading-spinner"></div>
        </div>
        <!-- TODO: Move to Template File. -->
        <script>
        var formDisplay = 1;
        var nfForms = nfForms || [];
        var form = [];
        form.id = "1";
        form.settings = {
            objectType: "Form Setting",
            editActive: true,
            title: "Send us a message",
            key: "",
            created_at: "2018-02-03 14:03:36",
            default_label_pos: "above",
            conditions: [],
            show_title: "1",
            clear_complete: "1",
            hide_complete: "1",
            wrapper_class: "",
            element_class: "",
            add_submit: "1",
            logged_in: "",
            not_logged_in_msg: "",
            sub_limit_number: "",
            sub_limit_msg: "",
            calculations: [],
            formContentData: [{
                order: 0,
                cells: [{
                        order: 0,
                        fields: ["message"],
                        width: 50
                    },
                    {
                        order: 1,
                        fields: ["name", "email", "submit"],
                        width: 50,
                    },
                ],
            }, ],
            "container_styles_background-color": "",
            container_styles_border: "",
            "container_styles_border-style": "",
            "container_styles_border-color": "",
            container_styles_color: "",
            container_styles_height: "",
            container_styles_width: "",
            "container_styles_font-size": "",
            container_styles_margin: "",
            container_styles_padding: "",
            container_styles_display: "",
            container_styles_float: "",
            container_styles_show_advanced_css: "0",
            container_styles_advanced: "",
            "title_styles_background-color": "",
            title_styles_border: "",
            "title_styles_border-style": "",
            "title_styles_border-color": "",
            title_styles_color: "",
            title_styles_height: "",
            title_styles_width: "",
            "title_styles_font-size": "",
            title_styles_margin: "",
            title_styles_padding: "",
            title_styles_display: "",
            title_styles_float: "",
            title_styles_show_advanced_css: "0",
            title_styles_advanced: "",
            "row_styles_background-color": "",
            row_styles_border: "",
            "row_styles_border-style": "",
            "row_styles_border-color": "",
            row_styles_color: "",
            row_styles_height: "",
            row_styles_width: "",
            "row_styles_font-size": "",
            row_styles_margin: "",
            row_styles_padding: "",
            row_styles_display: "",
            row_styles_show_advanced_css: "0",
            row_styles_advanced: "",
            "row-odd_styles_background-color": "",
            "row-odd_styles_border": "",
            "row-odd_styles_border-style": "",
            "row-odd_styles_border-color": "",
            "row-odd_styles_color": "",
            "row-odd_styles_height": "",
            "row-odd_styles_width": "",
            "row-odd_styles_font-size": "",
            "row-odd_styles_margin": "",
            "row-odd_styles_padding": "",
            "row-odd_styles_display": "",
            "row-odd_styles_show_advanced_css": "0",
            "row-odd_styles_advanced": "",
            "success-msg_styles_background-color": "",
            "success-msg_styles_border": "",
            "success-msg_styles_border-style": "",
            "success-msg_styles_border-color": "",
            "success-msg_styles_color": "",
            "success-msg_styles_height": "",
            "success-msg_styles_width": "",
            "success-msg_styles_font-size": "",
            "success-msg_styles_margin": "",
            "success-msg_styles_padding": "",
            "success-msg_styles_display": "",
            "success-msg_styles_show_advanced_css": "0",
            "success-msg_styles_advanced": "",
            "error_msg_styles_background-color": "",
            error_msg_styles_border: "",
            "error_msg_styles_border-style": "",
            "error_msg_styles_border-color": "",
            error_msg_styles_color: "",
            error_msg_styles_height: "",
            error_msg_styles_width: "",
            "error_msg_styles_font-size": "",
            error_msg_styles_margin: "",
            error_msg_styles_padding: "",
            error_msg_styles_display: "",
            error_msg_styles_show_advanced_css: "0",
            error_msg_styles_advanced: "",
            currency: "",
            unique_field_error: "A form with this value has already been submitted.",
            drawerDisabled: false,
            ninjaForms: "Ninja Forms",
            changeEmailErrorMsg: "Please enter a valid email address!",
            confirmFieldErrorMsg: "These fields must match!",
            fieldNumberNumMinError: "Number Min Error",
            fieldNumberNumMaxError: "Number Max Error",
            fieldNumberIncrementBy: "Please increment by ",
            fieldTextareaRTEInsertLink: "Insert Link",
            fieldTextareaRTEInsertMedia: "Insert Media",
            fieldTextareaRTESelectAFile: "Select a file",
            formErrorsCorrectErrors: "Please correct errors before submitting this form.",
            validateRequiredField: "This is a required field.",
            honeypotHoneypotError: "Honeypot Error",
            fileUploadOldCodeFileUploadInProgress: "File Upload in Progress.",
            fileUploadOldCodeFileUpload: "FILE UPLOAD",
            currencySymbol: false,
            fieldsMarkedRequired: 'Fields marked with an <span class="ninja-forms-req-symbol">*<\/span> are required',
            thousands_sep: ",",
            decimal_point: ".",
            dateFormat: "m\/d\/Y",
            startOfWeek: "1",
            of: "of",
            previousMonth: "Previous Month",
            nextMonth: "Next Month",
            months: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            monthsShort: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            weekdays: [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
            ],
            weekdaysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            weekdaysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            currency_symbol: "",
            beforeForm: "",
            beforeFields: "",
            afterFields: "",
            afterForm: "",
        };
        form.fields = [{
                objectType: "Field",
                objectDomain: "fields",
                editActive: false,
                order: 1,
                label: "Message",
                key: "message",
                type: "textarea",
                created_at: "2018-02-03 14:03:36",
                label_pos: "above",
                required: 1,
                placeholder: "",
                default: "",
                wrapper_class: "",
                element_class: "",
                container_class: "",
                input_limit: "",
                input_limit_type: "characters",
                input_limit_msg: "Character(s) left",
                manual_key: "",
                disable_input: "",
                admin_label: "",
                help_text: "",
                desc_text: "",
                disable_browser_autocomplete: "",
                textarea_rte: "",
                disable_rte_mobile: "",
                textarea_media: "",
                "wrap_styles_background-color": "",
                wrap_styles_border: "",
                "wrap_styles_border-style": "",
                "wrap_styles_border-color": "",
                wrap_styles_color: "",
                wrap_styles_height: "",
                wrap_styles_width: "",
                "wrap_styles_font-size": "",
                wrap_styles_margin: "",
                wrap_styles_padding: "",
                wrap_styles_display: "",
                wrap_styles_float: "",
                wrap_styles_show_advanced_css: 0,
                wrap_styles_advanced: "",
                "label_styles_background-color": "",
                label_styles_border: "",
                "label_styles_border-style": "",
                "label_styles_border-color": "",
                label_styles_color: "",
                label_styles_height: "",
                label_styles_width: "",
                "label_styles_font-size": "",
                label_styles_margin: "",
                label_styles_padding: "",
                label_styles_display: "",
                label_styles_float: "",
                label_styles_show_advanced_css: 0,
                label_styles_advanced: "",
                "element_styles_background-color": "",
                element_styles_border: "",
                "element_styles_border-style": "",
                "element_styles_border-color": "",
                element_styles_color: "",
                element_styles_height: "",
                element_styles_width: "",
                "element_styles_font-size": "",
                element_styles_margin: "",
                element_styles_padding: "",
                element_styles_display: "",
                element_styles_float: "",
                element_styles_show_advanced_css: 0,
                element_styles_advanced: "",
                cellcid: "c3505",
                id: 3,
                beforeField: "",
                afterField: "",
                parentType: "textarea",
                element_templates: ["textarea", "input"],
                old_classname: "",
                wrap_template: "wrap",
            },
            {
                objectType: "Field",
                objectDomain: "fields",
                editActive: false,
                order: 2,
                label: "Name",
                key: "name",
                type: "textbox",
                created_at: "2018-02-03 14:03:36",
                label_pos: "above",
                required: 1,
                placeholder: "",
                default: "",
                wrapper_class: "",
                element_class: "",
                container_class: "",
                input_limit: "",
                input_limit_type: "characters",
                input_limit_msg: "Character(s) left",
                manual_key: "",
                disable_input: "",
                admin_label: "",
                help_text: "",
                desc_text: "",
                disable_browser_autocomplete: "",
                mask: "",
                custom_mask: "",
                "wrap_styles_background-color": "",
                wrap_styles_border: "",
                "wrap_styles_border-style": "",
                "wrap_styles_border-color": "",
                wrap_styles_color: "",
                wrap_styles_height: "",
                wrap_styles_width: "",
                "wrap_styles_font-size": "",
                wrap_styles_margin: "",
                wrap_styles_padding: "",
                wrap_styles_display: "",
                wrap_styles_float: "",
                wrap_styles_show_advanced_css: 0,
                wrap_styles_advanced: "",
                "label_styles_background-color": "",
                label_styles_border: "",
                "label_styles_border-style": "",
                "label_styles_border-color": "",
                label_styles_color: "",
                label_styles_height: "",
                label_styles_width: "",
                "label_styles_font-size": "",
                label_styles_margin: "",
                label_styles_padding: "",
                label_styles_display: "",
                label_styles_float: "",
                label_styles_show_advanced_css: 0,
                label_styles_advanced: "",
                "element_styles_background-color": "",
                element_styles_border: "",
                "element_styles_border-style": "",
                "element_styles_border-color": "",
                element_styles_color: "",
                element_styles_height: "",
                element_styles_width: "",
                "element_styles_font-size": "",
                element_styles_margin: "",
                element_styles_padding: "",
                element_styles_display: "",
                element_styles_float: "",
                element_styles_show_advanced_css: 0,
                element_styles_advanced: "",
                cellcid: "c3196",
                cellOrder: 1,
                id: 1,
                beforeField: "",
                afterField: "",
                parentType: "textbox",
                element_templates: ["textbox", "input"],
                old_classname: "",
                wrap_template: "wrap",
            },
            {
                objectType: "Field",
                objectDomain: "fields",
                editActive: false,
                order: 3,
                label: "Email",
                key: "email",
                type: "email",
                created_at: "2018-02-03 14:03:36",
                label_pos: "above",
                required: 1,
                placeholder: "",
                default: "",
                wrapper_class: "",
                element_class: "",
                container_class: "",
                admin_label: "",
                help_text: "",
                desc_text: "",
                "wrap_styles_background-color": "",
                wrap_styles_border: "",
                "wrap_styles_border-style": "",
                "wrap_styles_border-color": "",
                wrap_styles_color: "",
                wrap_styles_height: "",
                wrap_styles_width: "",
                "wrap_styles_font-size": "",
                wrap_styles_margin: "",
                wrap_styles_padding: "",
                wrap_styles_display: "",
                wrap_styles_float: "",
                wrap_styles_show_advanced_css: 0,
                wrap_styles_advanced: "",
                "label_styles_background-color": "",
                label_styles_border: "",
                "label_styles_border-style": "",
                "label_styles_border-color": "",
                label_styles_color: "",
                label_styles_height: "",
                label_styles_width: "",
                "label_styles_font-size": "",
                label_styles_margin: "",
                label_styles_padding: "",
                label_styles_display: "",
                label_styles_float: "",
                label_styles_show_advanced_css: 0,
                label_styles_advanced: "",
                "element_styles_background-color": "",
                element_styles_border: "",
                "element_styles_border-style": "",
                "element_styles_border-color": "",
                element_styles_color: "",
                element_styles_height: "",
                element_styles_width: "",
                "element_styles_font-size": "",
                element_styles_margin: "",
                element_styles_padding: "",
                element_styles_display: "",
                element_styles_float: "",
                element_styles_show_advanced_css: 0,
                element_styles_advanced: "",
                cellcid: "c3200",
                cellOrder: 2,
                id: 2,
                beforeField: "",
                afterField: "",
                parentType: "email",
                element_templates: ["email", "input"],
                old_classname: "",
                wrap_template: "wrap",
            },
            {
                objectType: "Field",
                objectDomain: "fields",
                editActive: false,
                order: 4,
                label: "Submit",
                key: "submit",
                type: "submit",
                created_at: "2018-02-03 14:03:36",
                processing_label: "Processing",
                container_class: "",
                element_class: "",
                "wrap_styles_background-color": "",
                wrap_styles_border: "",
                "wrap_styles_border-style": "",
                "wrap_styles_border-color": "",
                wrap_styles_color: "",
                wrap_styles_height: "",
                wrap_styles_width: "",
                "wrap_styles_font-size": "",
                wrap_styles_margin: "",
                wrap_styles_padding: "",
                wrap_styles_display: "",
                wrap_styles_float: "",
                wrap_styles_show_advanced_css: 0,
                wrap_styles_advanced: "",
                "label_styles_background-color": "",
                label_styles_border: "",
                "label_styles_border-style": "",
                "label_styles_border-color": "",
                label_styles_color: "",
                label_styles_height: "",
                label_styles_width: "",
                "label_styles_font-size": "",
                label_styles_margin: "",
                label_styles_padding: "",
                label_styles_display: "",
                label_styles_float: "",
                label_styles_show_advanced_css: 0,
                label_styles_advanced: "",
                "element_styles_background-color": "",
                element_styles_border: "",
                "element_styles_border-style": "",
                "element_styles_border-color": "",
                element_styles_color: "",
                element_styles_height: "",
                element_styles_width: "",
                "element_styles_font-size": "",
                element_styles_margin: "",
                element_styles_padding: "",
                element_styles_display: "",
                element_styles_float: "",
                element_styles_show_advanced_css: 0,
                element_styles_advanced: "",
                "submit_element_hover_styles_background-color": "",
                submit_element_hover_styles_border: "",
                "submit_element_hover_styles_border-style": "",
                "submit_element_hover_styles_border-color": "",
                submit_element_hover_styles_color: "",
                submit_element_hover_styles_height: "",
                submit_element_hover_styles_width: "",
                "submit_element_hover_styles_font-size": "",
                submit_element_hover_styles_margin: "",
                submit_element_hover_styles_padding: "",
                submit_element_hover_styles_display: "",
                submit_element_hover_styles_float: "",
                submit_element_hover_styles_show_advanced_css: 0,
                submit_element_hover_styles_advanced: "",
                cellcid: "c3206",
                cellOrder: 3,
                id: 4,
                beforeField: "",
                afterField: "",
                label_pos: "above",
                parentType: "textbox",
                element_templates: ["submit", "button", "input"],
                old_classname: "",
                wrap_template: "wrap-no-label",
            },
        ];
        nfForms.push(form);
        </script>
        <script id="nf-tmpl-cell" type="text/template">
            <nf-fields></nf-fields>
          </script>

        <script id="nf-tmpl-row" type="text/template">
            <nf-cells></nf-cells>
          </script>
    </div>
</section>
@endsection