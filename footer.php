    <footer id="footer">
      <p><strong>SAPS:</strong> <a href="mailto:difusion@saps-latallera.org">difusion@saps-latallera.org</a> | +52 8647 5340 | <a href="https://www.facebook.com/saladeartepublicosiqueiros" target="_blank">Facebook</a> | <a href="https://twitter.com/SAPSiqueiros" target="_blank">Twitter</a></p>
      <p><strong>La Tallera:</strong> <a href="mailto:difusion-sapslatallera@inba.gob.mx">difusion-latallera@inba.gob.mx</a> | +777 160 11 90 | <a href="https://www.facebook.com/la.tallera" target="_blank">Facebook</a> | <a href="https://twitter.com/LaTallera" target="_blank">Twitter</a></p>
      <p>PROYECTO SIQUEIROS: Sala de Arte Público Siqueiros - La Tallera, pertenece a la red de museos de la SEP, INBA y CONACULTA.</p>
      <p>Copyright © <?php echo date("Y"); ?> Proyecto Siqueiros</p>
    </footer>

  </section>

  <?php get_template_part('partials/scripts'); ?>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.example.com",
      "logo": "http://www.example.com/images/logo.png",
      "contactPoint" : [
        { "@type" : "ContactPoint",
          "telephone" : "+1-877-746-0909",
          "contactType" : "customer service",
          "contactOption" : "TollFree",
          "areaServed" : "US"
        } , {
          "@type" : "ContactPoint",
          "telephone" : "+1-505-998-3793",
          "contactType" : "customer service"
        } ],
      "sameAs" : [
        "http://www.facebook.com/your-profile",
        "http://instagram.com/yourProfile",
        "http://www.linkedin.com/in/yourprofile",
        "http://plus.google.com/your_profile"
        ]
    }
  </script>

  </body>
</html>
