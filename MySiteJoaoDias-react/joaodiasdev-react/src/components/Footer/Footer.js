import React from 'react';
import { Button } from '../../GlobalStyles';
import {
  FooterContainer,
  FooterSubscription,
  FooterSubHeading,
  FooterSubText,
  Form,
  FormInput,
  FooterLink,
  FooterLinkTitle,
  FooterLinksContainer,
  FooterLinksItems,
  FooterLinksWrapper,
} from './Footer.elements';
function Footer() {
  return (
    <FooterContainer>
      <FooterSubscription>
        <FooterSubHeading>Venha Desenvolver sua Ideia!</FooterSubHeading>
        <FooterSubText>Satisfação Garantida.</FooterSubText>
        <Form>
          <FormInput name="email" type="email" placeholder="Seu Email" />
          <Button fontBig>Novidades</Button>
        </Form>
      </FooterSubscription>
      <FooterLinksContainer>
        <FooterLinksWrapper>
          <FooterLinksItems>
            <FooterLinkTitle>Links Rápidos</FooterLinkTitle>
            <FooterLink to="/">Home</FooterLink>
            <FooterLink to="/portifolio">Portifolio</FooterLink>
            <FooterLink to="/contact">Contato</FooterLink>
            <FooterLink to="/things">Things :)</FooterLink>
          </FooterLinksItems>
        </FooterLinksWrapper>
      </FooterLinksContainer>
    </FooterContainer>
  );
}

export default Footer;
