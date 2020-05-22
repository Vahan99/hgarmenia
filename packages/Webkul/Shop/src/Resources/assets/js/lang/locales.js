export const messages = {
    ar: {
        required     : (field) => 'حقل' + field + ' مطلوب',
        alpha        : (field) => field + ' يجب ان يحتوي على حروف فقط',
        alpha_num    : (field) => field + ' قد يحتوي فقط على حروف وارقام',
        min          : (field, length) => 'الحقل ' + field + ' يجب ان يحتوي على ' + length + ' حروف على الأقل',
        numeric      : (field) => field + ' يمكن ان يحتوي فقط على ارقام',
        oneOf        : (field) => 'الحقل ' + field + 'يجب ان يكون قيمة صحيحة',
        regex        : (field) => 'الحقل' + field+ ' غير صحيح',
        required_if  : (field) => 'حقل' + field + ' مطلوب',
        size         : (field, size) => field + ' يجب ان يكون اقل من ' + size + ' كيلوبايت',
        min_value    : (field, min) => 'قيمة الحقل' + field + ' يجب ان تكون اكبر من ' + min + ' او تساويها',
        alpha_spaces : (field) => field + ' قد يحتوي فقط على حروف ومسافات',
        between      : (field, min, max) => 'قيمة ' +field+ ' يجب ان تكون ما بين ' + min + ' و ' + max,
        confirmed    : (field) => field + ' لا يماثل التأكيد',
        digits       : (field, length) => field + ' يجب ان تحتوي فقط على ارقام والا يزيد عددها عن ' + length + ' رقم',
        dimensions   : (field, width, height) => field + ' يجب ان تكون بمقاس ' + width + ' بكسل في ' + height + ' بكسل',
        email        : (field) => field + ' يجب ان يكون بريدا اليكتروني صحيح',
        excluded     : (field) => 'الحقل' + field +'غير صحيح',
        ext          : (field) =>'نوع مل'+ field + 'غير صحيح',
        image        : (field) => field + ' يجب ان تكون صورة',
        integer      : (field) => 'الحقل ' +field + ' يجب ان يكون عدداً صحيحاً',
        length       : (field, length) => 'حقل'+ field + ' يجب الا يزيد عن ' + length,
        max_value    : (field, min) => 'قيمة الحقل '+ field + ' يجب ان تكون اصغر من ' + min + ' او تساويها',
        max          : (field, length) => 'الحقل' + field + 'يجب ان يحتوي على ' + length + ' حروف على الأكثر',
        mimes        : (field) => 'نوع ملف' + field + 'غير صحيح'
    },
    hy: {
        required     : (field) => field + 'դաշտը պարտադիր է',
        alpha        : (field) => field + ' Այն պետք է պարունակի միայն տառեր',
        alpha_num    : (field) => field + 'Այն պետք է պարունակել միայն տառեր և թվեր',
        min          : (field, length) => field + 'դաշտը պետք է պարունակի' + length + 'առնվազն տառեր',
        numeric      : (field) => field + 'Այն պետք է պարունակել միայն թվեր',
        oneOf        : (field) => field + 'դաշտը պետք է լինի վավեր արժեք',
        regex        : (field) => field+ 'դաշտը սխալ է',
        required_if  : (field) => field + 'Դաշտը պահանջվում է',
        size         : (field, size) => field + 'պետք է լինի ավելի քիչ, քան' + size + ' կբ',
        min_value    : (field, min) => field + 'Դաշտային արժեքը պետք է լինի ավելի մեծ, քան' + min + ' Կամ հավասար է դրան ',
        alpha_spaces : (field) => field + ' Այն պետք է պարունակել միայն տառեր և տարածքներ',
        between      : (field, min, max) => field+ ' դաշտի արժեքը պետք է լինի' + min + ' ից ' + max,
        confirmed    : (field) => field + 'Հաստատումը չի համապաատասխանում',
        digits       : (field, length) => field + ' Այն պետք է պարունակի միայն թվեր և ոչ ավելին քան' + length,
        dimensions   : (field, width, height) => field + '֊ի լայնություն ը' + width + ' և բարձրության ' + height + 'պետք է լինի',
        email        : (field) => field + '֊ը պետք է լինի վավեր էլ. հասցե',
        excluded     : (field) => 'Ընտրված' + field +' դաշտը պետք է լինի վավեր արժեք',
        ext          : (field) =>field + ' դաշտը պետք է լինի վավեր ֆայլ',
        image        : (field) => field + ' դաշտը պետք է լինի նկար',
        integer      : (field) => field + ' պետք է լինի թիվ',
        length       : (field, length) => field + ' պետք է լինի ոչ ավելի, քան ' + length + 'երկարություն',
        max_value    : (field, min) => field + ' դաշտը պետք ե լինի ' + min + ' կամ պակաս',
        max          : (field, length) => field + ' դաշտը պետք է պարունակի առավելագույն' + length + ' երկարություն',
        mimes        : (field) => field + ' դաշտը պետք է ունենա վավեր ֆայլի տեսակ'
    },
    ru: {
        required     : (field) => field + ' поле обязательно для заполнения',
        alpha        : (field) => field + ' поле должен содержать только буквы',
        alpha_num    : (field) => field + ' поле может содержать только буквы и цифры',
        min          : (field, length) => field + ' поле должно содержать ' + length + ' минимальные буквы',
        numeric      : (field) => field + ' поле должен содержать только цифры',
        oneOf        : (field) => field + ' поле должно быть действительным значением',
        regex        : (field) => field+ ' поле неверно',
        required_if  : (field) => field + ' Поле обязательно для заполнения',
        size         : (field, size) => field + ' поле должно быть меньше чем' + size + ' килобайт',
        min_value    : (field, min) => field + 'Значение поля должно быть больше чем ' + min + ' или равно',
        alpha_spaces : (field) => field + ' поле должен содержать только буквы и пробелы',
        between      : (field, min, max) => field+ ' значение поля должно быть ' + min + ' от ' + max,
        confirmed    : (field) => field + 'Подтверждение не совпадает',
        digits       : (field, length) => field + ' поле должен содержать только цифры и не более чем' + length,
        dimensions   : (field, width, height) => field + ' ширина и' + width + ' высота ' + height + ' должна быт',
        email        : (field) => field + ' поле должно быть действительным. эл. адрес',
        excluded     : (field) => 'Выбранное поле' + field +' должно быть допустимым значением',
        ext          : (field) =>field + ' поле должно быть действительным файлом',
        image        : (field) => field + ' поле должно быть картинкой',
        integer      : (field) => field + ' поле должно быть числом',
        length       : (field, length) => field + ' поле должно быть не более ' + length + ' длина',
        max_value    : (field, min) => field + ' поле должно быть ' + min + ' или меньше',
        max          : (field, length) => field + ' поле должно содержать максимальную длину ' + length,
        mimes        : (field) => field + 'Поле должно иметь допустимый тип файла'
    },
}
