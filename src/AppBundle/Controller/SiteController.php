<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type as TYPE;

use AppBundle\Entity\ContactMail;
use AppBundle\Form\ContactMailType;
use AppBundle\Entity\Photo;

/**
 * Controlador principal de la web.
 *
 * @author Enrique José Esteban Plaza <ense.esteban@gmail.com>
 */
class SiteController extends Controller
{
    /**
     * Muestra la portada del sitio web.
     *
     * @Route("/", name="index")
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('index.html.twig', array(
            'nav' => 'index',
        ));
    }

    /**
     * Pagina de testeo
     *
     * @Route("/test/", name="test")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function textAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        $engagements = $em->getRepository('AppBundle:Engagement')->findAll();

        return $this->render('test.html.twig', array(
            'users' => $users,
            'engagements' => $engagements,
            'nav' => 'index'
        ));
    }

    /**
     * Muestra el formulario de contacto y también procesa el envío de emails.
     *
     * @Route("/contacto/", name="contact")
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function contactoAction(Request $request)
    {
        $contactMail = new ContactMail();
        
        $form = $this->createForm(ContactMailType::class, null);
        
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();
                
                $content = sprintf(" Remitente: %s \n\n Email:\n %s \n\n Mensaje:\n %s \n\n Dirección IP: %s \n",
                    $data->getName(),
                    $data->getEmail(),
                    htmlspecialchars($data->getBody()),
                    $request->server->get('REMOTE_ADDR')
                );
                
                $to = 'info@expertosit.es';
                $subject = $data->getSubject();

                // Devido a una restricción de 1and1 se usa la función mail de php
                $headers = 'From: ' . $data->getEmail() . PHP_EOL;
                $sended = mail( $to, $subject, $content, $headers );

                if ($sended) {
                    $message = array(
                        'check' => true,
                        'email' => $data->getEmail(),
                    );
                }
                else {
                     $message = array(
                        'check' => false,
                        'email' => $data->getEmail(),
                    );
                }
                
                return $this->render('contacto.html.twig', array(
                    'nav' => 'contacto',
                    'message' => $message,
                    'form' => $form->createView(),
                ));
            }
        }
        
        return $this->render('contacto.html.twig', array(
            'nav' => 'contacto',
            'form' => $form->createView(),
        ));

    }

    /*public function sendAction ()
    {
        $request = $this->container->get('request');

        $name = $request->get('contacMaiil_name');
        $email = $request->get('form_email');
        $subject = $request->get('form_subject');
        $body = $request->get('form_message');

        $view = $this->renderView('email.html.twig', array( 'name' => $name,
            'email' => $email,
            'from' => $email,
            'subject' => $subject,
            'body' => $body
        ));

        $transport = \Swift_SmtpTransport::newInstance('smtp.1and1.com', 587)
         ->setUsername('smtp.1and1.com')
         ->setPassword('XXXXXXXXXXXX')
        ;
        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance('Nueva peticion de informacion desde adiestramientovalencia.com ')
         ->setFrom(array('info@adiestramientovalencia.com' => 'Adiestramiento valencia' ))
         ->setTo(array($email => $name))
         ->setCc(array('info@adiestramientovalencia.com' => 'Adiestramiento valencia' ))
         ->setBcc(array('antonio.arjona@yavaris.com' => 'Antonio Arjona' ))
         ->setBody($view, 'text/html')
        ;

        $failures ="";
        $result = $mailer->send($message, $failures);

        //echo "Sent result:" . $result . " From ";// . " To " . $message->getTo();
        //var_dump($failures);

        if (!is_null($result)){ //Code error 2, Code success 3 ????
            if ($result == 0) { 
                $form = $this->createForm(ContactMailType::class, $contactMail);

                $form->handleRequest($request);


            }
            else { 
                return new JsonResponse(array("response" => true));
            }
        }
        else {
            return new JsonResponse(array("response" => false));
        }

    }*/

    /** 
     * Muestra las páginas de cursos
     * 
     * @Route(
     *     "/curso/{slug}/",
     *     requirements={ "slug"="reparacion-de-moviles|iniciacion-a-las-nuevas-tecnologias" },
     *     name="courses",
     * )
     *
     * @param $slug slug de la página de cursos a visualizar
     * @return Response
     */
    public function cuourseAction($slug)
    {
        return $this->render('curso-'.sprintf('%s.html.twig', $slug), array('nav' => 'cursos' ));
    }

    /** 
     * Muestra las páginas de ventas
     * 
     * @Route(
     *     "/venta/{slug}/",
     *     requirements={ "slug"="recreativas-y-emulacion|repuestos-y-consumibles|desarrollo-web" },
     *     name="sales",
     * )
     *
     * @param $slug slug de la página de cursos a visualizar
     * @return Response
     */
    public function saleAction($slug)
    {
        return $this->render('venta-'.sprintf('%s.html.twig', $slug), array('nav' => 'ventas' ));
    }

    /** 
     * Muestra la página estatica del servicio técnico
     * 
     * @Route(
     *     "/servicio-tecnico/",
     *     name="technical-support",
     * )
     *
     * @return Response
     */
    public function TechnicalSupportAction()
    {
        return $this->render('servicio-tecnico.html.twig', array('nav' => 'reparaciones' ));
    }

    /** 
     * Muestra alguna páginas estaticas que están fuera del menú principal, como por ejemplo el aviso legal.
     * 
     * @Route(
     *     "/sitemap/{_format}",
     *     requirements={ "_format" = "xml" },
     *     name="sitemap",
     * )
     *
     * @param $slug slug de la página estatica a visualizar
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function siteMapAction()
    {
        return $this->render('sitemap.xml.twig', ['nav' => 'index']);
    }

    /**
     * Muestra alguna páginas estaticas que están fuera del menú principal, como por ejemplo el aviso legal.
     * 
     * @Route(
     *     "/{slug}/",
     *     requirements={ "slug" = "aviso-legal|politicas-de-privacidad|sitemap|photos" },
     *     name="static",
     * )
     *
     * @param $slug slug de la página estatica a visualizar
     * @return Response
     */
    public function staticAction($slug)
    {
        return $this->render(sprintf('%s.html.twig', $slug), array('nav' => 'index' ));
    }
}
