wp.blocks.registerBlockStyle( 
    'core/quote', 
    {
    name: 'fancy-quote',
    label: 'Fancy Quote',
    isDefault: true
} 
);

wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    // wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
} );


