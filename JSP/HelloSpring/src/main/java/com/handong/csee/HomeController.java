package com.handong.csee;

import java.text.DateFormat;
import java.util.Date;
import java.util.List;
import java.util.Locale;

import javax.servlet.http.HttpServletRequest;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

/**
 * Handles requests for the application home page.
 */
@Controller
public class HomeController {
	
	private static final Logger logger = LoggerFactory.getLogger(HomeController.class);
	
	/**
	 * Simply selects the home view to render by returning its name.
	 */
	
	@RequestMapping(value = "/", method = RequestMethod.GET)
	public ModelAndView home(Locale locale, ModelAndView mv) {
		logger.info("Welcome home! The client locale is {}.", locale);
		
		Date date = new Date();
		DateFormat dateFormat = DateFormat.getDateTimeInstance(DateFormat.LONG, DateFormat.LONG, locale);
		
		String formattedDate = dateFormat.format(date);
		
		mv.addObject("serverTime", formattedDate);
		mv.setViewName("home");
		
		//model.addAttribute("serverTime", formattedDate );
		
		return mv;
	}
	
	@RequestMapping(value = "/nextpage", method = RequestMethod.POST)
	public ModelAndView nextpage(ModelAndView mv, @RequestParam("input_name") String input_name) {
		mv.setViewName("nextpageview");
		mv.addObject("name", input_name);
		
		System.out.println("input name: "+input_name);
		
		return mv;
	}
	
	@RequestMapping(value = "/nextpage2", method = RequestMethod.POST)
	public ModelAndView nextpage2(ModelAndView mv, HttpServletRequest request) {
		mv.setViewName("nextpageview");
		mv.addObject("name", request.getParameter("input_name"));
		
		System.out.println("input name: "+request.getParameter("input_name"));
		
		return mv;
	}

	
	
}
