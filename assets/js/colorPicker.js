import * as AColorPicker from "a-color-picker";

AColorPicker.from('.picker')
    .on('change', (picker, color) => {
        document.querySelector('.picker-data').value = AColorPicker.parseColor(color, "hex");
    });