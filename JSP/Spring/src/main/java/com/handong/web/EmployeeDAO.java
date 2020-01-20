package com.handong.web;

import java.util.List;

import com.handong.web.EmployeeVO;

public interface EmployeeDAO 
{
    public List<EmployeeVO> getAllEmployees();
}