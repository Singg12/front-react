import axios from 'axios';
import React, { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'

const ProductListOne = () => {
    const [products, setProducts] = useState([]);
    
    useEffect(() => {
      axios
        .get('http://localhost:8000/api/products')
        .then((response) => {
          console.log('Fetched products:', response.data); // Log data to check the structure
    
          // If the response contains a 'data' field, use that as the products array
          const productsData = Array.isArray(response.data) ? response.data : response.data.data || [];
          setProducts(productsData);  // Update the state with the fetched products
        })
        .catch((error) => console.error('Error fetching products:', error));
    }, []);
    
    return (

        <div className="product mt-24">
            <div className="container container-lg">
                
            
                <div className="row gy-4 g-12">
                <div className="row">
                {products.length === 0 ? (
                                <p>Loading products...</p> // Show loading message while data is being fetched
                                ) : (
                                products.map((product) => (
                    <div key={product.id} className="col-xxl-2 col-lg-3 col-sm-4 col-6">
                        
                    
                                    
                        <div  className="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 position-relative transition-2">
                            <Link
                                to="/cart"
                                className="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-pill flex-align gap-8 position-absolute inset-block-start-0 inset-inline-end-0 me-16 mt-16"
                            >
                                Add <i className="ph ph-shopping-cart" />
                            </Link>
                            <Link
                                to={`/product-details/${product.id}`}
                                className="product-card__thumb flex-center"
                            >
                                <img src={product.image}alt="" />
                            </Link>
                            <div className="product-card__content mt-12">
                                <div className="product-card__price mb-16">
                                    <span className="text-gray-400 text-md fw-semibold text-decoration-line-through">
                                        ${product.price}
                                    </span>
                                    <span className="text-heading text-md fw-semibold ">
                                        ${product.price} <span className="text-gray-500 fw-normal">/Qty</span>{" "}
                                    </span>
                                </div>
                                <div className="flex-align gap-6">
                                    <span className="text-xs fw-bold text-gray-600">4.8</span>
                                    <span className="text-15 fw-bold text-warning-600 d-flex">
                                        <i className="ph-fill ph-star" />
                                    </span>
                                    <span className="text-xs fw-bold text-gray-600">(17k)</span>
                                </div>
                                <h6 className="title text-lg fw-semibold mt-12 mb-8">
                                    <Link to="/product-details" className="link text-line-2">
                                        {product.name}
                                    </Link>
                                </h6>
                                <div className="flex-align gap-4">
                                    <span className="text-main-600 text-md d-flex">
                                        <i className="ph-fill ph-storefront" />
                                    </span>
                                    <span className="text-gray-500 text-xs">
                                       
                                    </span>
                                </div>
                                <div className="mt-12">
                                    <div
                                        className="progress w-100  bg-color-three rounded-pill h-4"
                                        role="progressbar"
                                        aria-label="Basic example"
                                        aria-valuenow={35}
                                        aria-valuemin={0}
                                        aria-valuemax={100}
                                    >
                                        <div
                                            className="progress-bar bg-main-600 rounded-pill"
                                            style={{ width: "35%" }}
                                        />
                                    </div>
                                    <span className="text-gray-900 text-xs fw-medium mt-8">
                                        Sold: 18/35
                                    </span>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                         ))
                        )}
                        </div>
                       
                    
                
                 
                </div>
            </div>
        </div>

    )
}

export default ProductListOne