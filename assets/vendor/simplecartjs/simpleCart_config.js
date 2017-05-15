simpleCart({
	cartColumns: [
		{ attr: "name" , label: "Prestation" },
		{ attr: "price" , label: "Prix", view: 'currency' },
		{ view: "decrement" , text:"<i class='fa fa-minus'></i>", label: false },
		{ attr: "quantity" , label: "Qté" },
		{ view: "increment" , text:"<i class='fa fa-plus'></i>", label: false },
		{ attr: "total" , label: "Sous-Total", view: 'currency' },
		{ view: "remove" , text: "<i class='fa fa-trash-o'></i>" , label: false }
	],
	cartStyle: "table", 
	checkout: { 
		type: "PayPal" , 
		email: "store@john.doe" 
	},
	currency: 	"EUR"
});