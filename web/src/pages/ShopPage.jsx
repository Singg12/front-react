import React from "react";
import Preloader from "../helper/Preloader";
import HeaderOne from "../components/HeaderOne";
import Breadcrumb from "../components/Breadcrumb";
import ShopSection from "../components/ShopSection";
import ColorInit from "../helper/ColorInit";
import ScrollToTop from "react-scroll-to-top";
import BannerOne from "../components/BannerOne";
import FooterOne from "../components/FooterOne";
import BottomFooter from "../components/BottomFooter";


const ShopPage = () => {

  return (
    <>
      {/* ColorInit */}
      <ColorInit color={false} />

      {/* ScrollToTop */}
      <ScrollToTop smooth color="#FA6400" />

      {/* Preloader */}
      <Preloader />

      {/* HeaderOne */}
      <HeaderOne category={true} />
      <BannerOne/>

      {/* Breadcrumb */}
      {/* <Breadcrumb title={"Shop"} /> */}

      {/* ShopSection */}
      <ShopSection />

      <FooterOne />
      <BottomFooter />



    </>
  );
};

export default ShopPage;
