tinymce.init({
    selector: '.richtext',
    height: 200,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblock code fullscreen",
        "insertdatetime media table contextmenu  paste imagetools responsivefilemanager "
    ],
    style_formats: [
        {
            title: 'Headers', items: [
                { title: 'h1', block: 'h1' },
                { title: 'h2', block: 'h2' },
                { title: 'h3', block: 'h3' },
                { title: 'h4', block: 'h4' },
                { title: 'h5', block: 'h5' },
                { title: 'h6', block: 'h6' }
            ]
        },

        {
            title: 'Blocks', items: [
                { title: 'p', block: 'p' },
                { title: 'div', block: 'div' },
                { title: 'pre', block: 'pre' }
            ]
        },

        {
            title: 'Containers', items: [
                { title: 'section', block: 'section', wrapper: true, merge_siblings: false },
                { title: 'article', block: 'article', wrapper: true, merge_siblings: false },
                { title: 'blockquote', block: 'blockquote', wrapper: true },
                { title: 'hgroup', block: 'hgroup', wrapper: true },
                { title: 'aside', block: 'aside', wrapper: true },
                { title: 'figure', block: 'figure', wrapper: true }
            ]
        }
    ],
    toolbar: "insertfile undo redo | styleselect |bold italic | alignleft aligncenter " +
        "alignright alignjustify | bullist numlist outdent indent | responsivefilemanager ",
    imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
    conten_css: [
        '//www.tinymce.com/css/codepen.min.css'
    ],
    external_filemanager_path: "../plugins/filemanager/",
    filemanager_title: " File Manager",
    external_plugins: { "filemanager": "../filemanager/plugin.min.js" }
})