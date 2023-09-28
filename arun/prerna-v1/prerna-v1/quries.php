<!DOCTYPE html>
<html lang="en">

 <?php include "header.php" ;?> 

   	<div class="banner-area banner-bg-10">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>QUERIES</h2>
						<ul class="page-title-link">
							<li><a href="#">Home</a></li>
							<li><a href="#">QUERIES</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



            <div id="about" class="section wb">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="accordion">
                      <h2>Include Faqs</h2>
                      
                      <div class="accordion-item">
                        <div class="accordion-item-header"> Q. Where do I start? </div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>Once students receive their Letter of Acceptance from their desired university, It should be treated as a green signal to start their application procedure for their student Visa.</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <div class="accordion-item-header"> Q. How good must my English be? </div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>Every university has prescribed English language requirements that the student needs to successfully qualify for. Hence, students are advised to check the university requirements and qualify for them.</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <div class="accordion-item-header"> Q.What type of student visa do I need?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A student visa is called by several names, depending on your study abroad destination. While in the UK, a student visa is called a Tier 4 (General Student) visa, in the US, the student visa is referred to as an F-1 visa.</p>
                          </div>
                        </div>
                      </div>
                         

                         <div class="accordion-item">
                        <div class="accordion-item-header"> Q.How much money will I require?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>Living expenses depend on multiple variables. Candidates can check out the amount of money they would require by going through our article, The Most Affordable Countries to Study Abroad, mentioned above.</p>
                          </div>
                        </div>
                      </div>

                       
                        <div class="accordion-item">
                        <div class="accordion-item-header">Q: Will consulates make exceptions and allow for emergency applications if a student is leaving sooner than the standard processing time?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A: This depends on the discretionary power of the consulate. They would handle such situations on a case-by-case basis.</p>
                          </div>
                        </div>
                      </div>

                       <div class="accordion-item">
                        <div class="accordion-item-header">Q:  Where do I apply for my student visa?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A: Candidates can apply online, on the official website of the consulate, or simply visit the visa issuing authority in person with the required documents and Visa Processing Fee.</p>
                          </div>
                        </div>
                      </div>

                       <div class="accordion-item">
                        <div class="accordion-item-header">Q: Can my family travel with me?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A: Yes. Families of students can travel. However, they would not be allowed to travel on a student visa and would require different visas for themselves.</p>
                          </div>
                        </div>
                      </div>


                       <div class="accordion-item">
                        <div class="accordion-item-header">Q: Can I work on my visa?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A: Most student visas allow students to work 20 hours per week once their semester begins.</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <div class="accordion-item-header">Q:How long can I stay?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A: Students can stay for the entire period their visa has been issued for. A lot of times, students are required to extend their visa to a later date which can also be requested.</p>
                          </div>
                        </div>
                       </div>
                       

                       <div class="accordion-item">
                        <div class="accordion-item-header">Q: Where can I find more information?</div>
                        <div class="accordion-item-body">
                          <div class="accordion-item-body-content">
                            <p>A: Students can visit our website for the latest information on studying abroad or simply get in touch with our counsellors for the latest information on visa applications and studying abroad</p>
                          </div>
                        </div>
                       </div>




                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <!-- end row -->
              </div>
              <!-- end container -->
            </div>



<?php include "footer.php" ;?>  

    <script type="text/javascript">
        
        const accordionItemHeaders = document.querySelectorAll(
  ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
  accordionItemHeader.addEventListener("click", (event) => {
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

    const currentlyActiveAccordionItemHeader = document.querySelector(
      ".accordion-item-header.active"
    );
    if (
      currentlyActiveAccordionItemHeader &&
      currentlyActiveAccordionItemHeader !== accordionItemHeader
    ) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});


    </script>   

</body>
</html>