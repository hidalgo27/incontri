<body style="margin: 0; padding: 0;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
      <tr>
        <td bgcolor="#978667" align="center" style="padding: 40px 0 30px 0;">
          <img src="{{asset('images/INCONTRI-LOGO-COLOR.png')}}" alt="incontri" width="250px"/>
        </td>
      </tr>
      <tr>
        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td>
                @yield('content')
              </td>
            </tr>
          </table>
      </tr>
      <tr>
        <td bgcolor="#978667" style="padding: 20px 20px 20px 20px;">
          <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td style="color:#fff; font-family: 'Segoe UI';">
                Visit our web page <a href="https://incontrimachupicchu.com/" target="_blank" style="color:#fbbf24;">Incontri</a> and follow us on our social networks
              </td>
              <td align="right">
                <table border="0" cellpadding="0" cellspacing="0" style="padding:0px 10px;">
                  <tr>
                    <td bgcolor="#fff" style="border-radius:50%">
                      <a href="https://web.facebook.com/incontridelpuebloviejo/?_rdc=1&_rdr" target="_blank">
                        <img src="{{asset('images/facebook.png')}}" alt="Facebook" width="30" height="30" style="display: block;" border="0" />
                      </a>
                    </td>
                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                    <td  bgcolor="#fff" style="border-radius:50%">
                      <a href="https://www.tripadvisor.com.pe/Restaurant_Review-g304036-d2460261-Reviews-Incontri_del_pueblo_Viejo-Aguas_Calientes_Machu_Picchu_Sacred_Valley_Cusco_Region.html" target="_blank">
                        <img src="{{asset('images/trip.png')}}" alt="Instagram" width="30" height="30" style="display: block;" border="0" />
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
</body>