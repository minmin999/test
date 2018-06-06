( function( api ) {

	// Extends our custom "vw-pet-shop" section.
	api.sectionConstructor['vw-pet-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );