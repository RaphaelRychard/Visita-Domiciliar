$(document).ready(function () {
    let buttonAdd2 = $("#add-button2");
    let buttonRemove2 = $("#remove-button2");
    let className2 = ".moradores-domicilio";
    let count = 0;
    let field = "";
    let maxFields = 50;

    function totalFields() {
        return $(className2).length;
    }

    function addNewField() {
        count = totalFields() + 1;
        field = $("#moradores-domicilio").clone();
        field.attr("id", "moradores-domicilio-clone-" + count);
        field.find("label").each(function () {
            let labelText = $(this).text();
            let labelFor = $(this).attr("for");
            let inputType = "text";

            // Adjust input type based on label content
            if (labelText.includes("Data") || labelText.includes("Data de")) {
                inputType = "date";
            } else if (labelText.toLowerCase().includes("cpf")) {
                inputType = "text";
                labelText = "CPF";
            } else if (labelText.toLowerCase().includes("idade")) {
                inputType = "number";
            } else if (labelText.toLowerCase().includes("renda")) {
                inputType = "text";
            } else if (labelText.toLowerCase().includes("escolaridade")) {
                inputType = "text";
            }

            let newInput = $("<input>")
                .attr("type", inputType)
                .addClass("form-control")
                .attr("placeholder", labelText)
                .attr("aria-label", "Digite " + labelText.toLowerCase());

            $(this).siblings("input").replaceWith(newInput);
        });

        $(className2 + ":last").after(field);
    }

    function removeLastField() {
        if (totalFields() > 1) {
            $(className2 + ":last").remove();
        }
    }

    function enableButtonRemove() {
        if (totalFields() === 2) {
            buttonRemove2.removeAttr("disabled");
            buttonRemove2.addClass("shadow-sm");
        }
    }

    function disableButtonRemove() {
        if (totalFields() === 1) {
            buttonRemove2.attr("disabled", "disabled");
            buttonRemove2.removeClass("shadow-sm");
        }
    }

    function disableButtonAdd() {
        if (totalFields() === maxFields) {
            buttonAdd2.attr("disabled", "disabled");
            buttonAdd2.removeClass("shadow-sm");
        }
    }

    function enableButtonAdd() {
        if (totalFields() === (maxFields - 1)) {
            buttonAdd2.removeAttr("disabled");
            buttonAdd2.addClass("shadow-sm");
        }
    }

    buttonAdd2.click(function () {
        addNewField();
        enableButtonRemove();
        disableButtonAdd();
    });

    buttonRemove2.click(function () {
        removeLastField();
        disableButtonRemove();
        enableButtonAdd();
    });
});